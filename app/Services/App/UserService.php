<?php

namespace app\Services\App;

use App\Models\Tenant\Department;
use App\Models\Tenant\User;
use App\Models\Tenant\UserDetail;
use App\Models\Tenant\UserIndustry;
use App\Models\Tenant\RoleUser;
use App\Models\Tenant\SystemRoleUser;
use App\Models\Tenant\Phone;
use App\Models\Tenant\TeamProviders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


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
    } elseif ($isAdd && !(User::where('email', $user->email)->exists())) {

      $user->security_token = Str::random(32);

      $user->save();

      $userId = $user->id;
    } else {

      //if user is in database, attach id
      $existingUser = User::where('email', $user->email)->first();
      $userId = $existingUser->id;
    }

    RoleUser::updateOrCreate(['user_id' => $userId, 'role_id' => $role]);
    $user->save();

    $userdetail['user_id'] = $userId;

    $userDetailModel = UserDetail::updateOrCreate(['user_id' => $userId], $userdetail);


    // set new token for reset password
    // Insert selected industries into user_industries table
    if (!$isAdd && $role == 4)
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

    return $user;
  }

  public function addProviderTeams($selectedTeams, $user)
  {
    TeamProviders::where('provider_id', $user->id)->delete();
    foreach ($selectedTeams as $team_id) {
      TeamProviders::create(["provider_id" => $user->id, "team_id" => $team_id, "status" => 1]);
    }
  }


  public function getUserDetails($id)
  {
    return User::with('phones')->find($id);
  }
  public function storeUserAddresses($id, $userAddresses)
  {
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
    $rolesArr=[];
    $roleUsers=RoleUser::where('user_id', $userId)->where('role_id', '>', 4)->get()->pluck('role_id');
    foreach ($roleUsers as $ru) {
      $rolesArr[$ru]=true;
    }
    return $rolesArr;
  }

  public function storeAdminRoles($rolesArr, $userId)
  {
    SystemRoleUser::where('user_id', $userId)->delete();

    foreach ($rolesArr as $roleId) {

      if ($roleId)
        SystemRoleUser::create(['user_id' => $userId, 'system_role_id' => $roleId]);
    }
  }
}
