<?php
namespace app\Services\App;

use App\Models\Tenant\User;
use App\Models\Tenant\UserDetail;
use App\Models\Tenant\Phone;
class UserService{

    public function createUser(User $user,$userdetail,$role){
        $user->password='3333';
        $user->save();
        $user->roles()->attach($role);
        $userdetail['user_id'] = $user->id;
        $userDetailModel = new UserDetail;
        $userDetailModel->fill($userdetail);
        $userDetailModel->save();
        return $user;
    }

    public function getUserDetails($id){
       return User::with('phones')->find($id); 
    }
}
