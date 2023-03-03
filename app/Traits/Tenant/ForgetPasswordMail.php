<?php
namespace App\Traits\Tenant;

use App\Models\Tenant\User;

trait ForgetPasswordMail
{
    public function sendForgetPasswordMail($user)
    {
        $company = User::find(1);
        $company = isset($company->users_business)?$company->users_business->company_name:'';
        $user->subject = $company.' Portal - Password Reset';
        $user->company = $company;
        //dd(sendmail($user->email,'',$user->subject,['data' => $user],'tenant.emails.forgot_password'));
        sendMail($user->email, $user->subject, ['data' => $user], 'tenant.emails.forget_password', [],'dispatch');
              
    }
}    