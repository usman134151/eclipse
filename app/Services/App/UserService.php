<?php

namespace app\Services\App;

use App\Models\Tenant\User;
use App\Models\Tenant\UserDetail;
use App\Models\Tenant\RoleUser;
use App\Models\Tenant\SystemRoleUser;
use App\Models\Tenant\RoleUserDetail;
use App\Models\Tenant\Team;
use App\Models\Tenant\TeamProviders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Services\App\AddressService;


class UserService
{

  public function createUser(User $user, $userdetail, $role, $email_invitation = 1, $selectedIndustries = [], $isAdd = true, $userCompanyAddress = '', $userCustomAddresses = [])
  {

    if (!is_null($user->password)) {
      if (Hash::needsRehash($user->password)) {
        $user->password = bcrypt($user->password);
      }
    } else {
      $user->password = bcrypt(Str::random(8));
    }


    if (!is_null($user->id)) {
      $userId = $user->id;
      $type = "update";
    } elseif ($isAdd && !(User::where('email', $user->email)->exists())) {

      $user->security_token = Str::random(32);

      $user->save();

      $userId = $user->id;
      $type = "create";
    } else {

      //if user is in database, attach id
      $existingUser = User::where('email', $user->email)->first();
      $userId = $existingUser->id;
      $type = "update";
    }

    RoleUser::updateOrCreate(['user_id' => $userId, 'role_id' => $role]);
    $user->save();

    $userdetail['user_id'] = $userId;
    //get lat lng for address
    if ($userdetail['address_line1'] || $userdetail['address_line2'] || $userdetail['city'] || $userdetail['state'] || $userdetail['country']) {
      $address =  $userdetail['address_line1'] . ', ' . $userdetail['address_line2'] . ',' . $userdetail['city'] . ', ' . $userdetail['state'] . ', ' . $userdetail['country'];
      
      $addressService = new AddressService();
      $data = $addressService->getGeocode($address);
      if (count($data)) {
        $userdetail['latitude'] = $data['lat'];
        $userdetail['longitude'] = $data['lng'];
      }
    }

    $userDetailModel = UserDetail::updateOrCreate(['user_id' => $userId], $userdetail);


    // set new token for reset password
    // Insert selected industries into user_industries table
    if ($role == 4)
      $user->industries()->sync($selectedIndustries);
    //   UserIndustry::where('user_id', $user->id)->delete();
    // foreach ($selectedIndustries as $industry_id) {
    //   $user->industries()->attach($industry_id);
    // }
    if ($email_invitation && $isAdd) {

      //$request->request->add(['data' => $user]); //add invoice id into request
      $subject = 'Welcome ' . $user->first_name . '! Set up your Eclipse account.';
      //$mail = Helper::sendmail($request->email,'',$subject,['data' => $user,'type'=>'1'],'emails.welcome_email_on');
    }

    addLogs([
      'action_by'     => \Auth::id(),
      'action_to'     => $user->id,
      'item_type'     => 'user',
      'type'          => $type,
      'message'         => "User " . $type . "d by " . \Auth::user()->name,
      'ip_address'     => \request()->ip(),
    ]);
    
    $data['userData']=$user;
    NotificationService::sendNotification('Account: Created', $data);

    return $user;
  }

  public function addProviderTeams($selectedTeams, $user)
  {
    TeamProviders::where('provider_id', $user->id)->delete();
    foreach ($selectedTeams as $team_id) {
      TeamProviders::create(["provider_id" => $user->id, "team_id" => $team_id, "status" => 1]);
      $team  = Team::find($team_id);
      $team->provider_count = count($team->providers);
      $team->save();
    }
  }


  public function getUserDetails($id)
  {
    return User::with('phones')->find($id);
  }


  public function getUserAddresses($id)
  {
  }



  public function storeCustomerRoles($rolesArr, $userId)
  {
    RoleUser::where('user_id', $userId)->where('role_id', '>', 4)->delete();
    foreach ($rolesArr as $roleId => $value) {
      if ($value)
        RoleUser::create(['user_id' => $userId, 'role_id' => $roleId]);
    }
  }

  public function getCustomerRoles($userId)
  {
    $rolesArr = [];
    $roleUsers = RoleUser::where('user_id', $userId)->where('role_id', '>', 4)->get()->pluck('role_id');
    foreach ($roleUsers as $ru) {
      $rolesArr[$ru] = true;
    }
    return $rolesArr;
  }

  public function storeUserRolesDetails($customer_id, $arr, $role_id, $typeofRelation, $default = 0)
  {

    $values = [];
    if ($role_id == 3) {

      //set admin staff
      RoleUserDetail::where(['associated_user' => $customer_id, 'role_id' => $role_id])->delete(); // delete existing records
      foreach ($arr as $admin) {
        if (array_key_exists('id', $admin)) { //checking for unchecked rows

          if (array_key_exists('permission_type', $admin) && $admin['permission_type'] == true) //setting permission
            $pt = 'manage';
          else
            $pt = 'visible';

          $values = ['user_id' => $admin['id'], 'associated_user' => $customer_id, 'role_id' => $role_id, 'permission_type' => $pt];

          RoleUserDetail::create($values);
        }
      }
    } else {
      if ($typeofRelation == 0) {
        // user_id has master relation with $arr_user
        RoleUserDetail::where(['user_id' => $customer_id, 'role_id' => $role_id])->delete(); // delete existing records

        foreach ($arr as $user_id) {
          $values = ['user_id' => $customer_id, 'associated_user' => $user_id, 'role_id' => $role_id];
          RoleUserDetail::create($values);
        }
      } else {
        // arr_users have master relation with user_id
        RoleUserDetail::where(['associated_user' => $customer_id, 'role_id' => $role_id])->delete(); // delete existing records

        foreach ($arr as $user_id) {
          $values = ['user_id' => $user_id, 'associated_user' => $customer_id, 'role_id' => $role_id];
          if ($default == $user_id)
            $values['is_default'] = true;
          RoleUserDetail::create($values);
        }
      }
    }
  }

  public function getUserRolesDetails($customer_id, $role_id, $typeofRelation)
  {
    if ($typeofRelation == 1)
      $details = RoleUserDetail::where(['associated_user' => $customer_id, 'role_id' => $role_id])
      ->join('users','user_id','users.id')->where('users.status',1)->get();
    else
      // master
      $details = RoleUserDetail::where(['user_id' => $customer_id, 'role_id' => $role_id])
      ->join('users', 'associated_user', 'users.id')->where('users.status', 1)->get();
   
    return $details;
  }

  public function storeAdminRoles($rolesArr, $userId, $user_type = 1)
  {
    // user_type = 1  (staff)
    // user_type = 2  (team)

    SystemRoleUser::where(['user_id' => $userId, 'system_user_type' => $user_type])->delete();

    foreach ($rolesArr as $roleId) {

      if ($roleId)
        SystemRoleUser::create(['user_id' => $userId, 'system_role_id' => $roleId, 'system_user_type' => $user_type]);
    }
  }
}
