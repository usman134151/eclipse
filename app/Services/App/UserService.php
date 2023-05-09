<?php
namespace app\Services\App;

use App\Models\Tenant\User;
use App\Models\Tenant\UserDetail;
use App\Models\Tenant\Phone;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserService{

    public function createUser(User $user,$userdetail,$role,$email_invitation=1,$selectedIndustries=[]){
        $user->password=bcrypt(Str::random(8));
        $user->security_token = Str::random(32);
        $user->save();
        $user->roles()->attach($role);
        $userdetail['user_id'] = $user->id;
        $userDetailModel = new UserDetail;
        $userDetailModel->fill($userdetail);

        $userDetailModel->save();
        // set new token for reset password
        // Insert selected industries into user_industries table
        foreach ($selectedIndustries as $industry_id) {
          $user->industries()->attach($industry_id);
        }
        if($email_invitation)
        {
          
          //$request->request->add(['data' => $user]); //add invoice id into request
          $subject = 'Welcome '.$user->first_name.'! Set up your Eclipse account.';
          //$mail = Helper::sendmail($request->email,'',$subject,['data' => $user,'type'=>'1'],'emails.welcome_email_on');
        }

        return $user;
    }

    public function getUserDetails($id){
       return User::with('phones')->find($id); 
    }
}
