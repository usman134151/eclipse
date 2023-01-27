<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationResponse extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('api_notifications')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('api_notifications')->insert([
            'id'    =>  200,
            'message' =>    'Result found successfully.',
            'title'    => 'Result Found!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
       
        DB::table('api_notifications')->insert([
            'id'    =>  300,
            'message' =>    'User logged in successfully',
            'title'    => 'Login Success!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  301,
            'message' =>    'User register successfuly.',
            'title'    => 'Register Success!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  302,
            'message' =>    'User logout successfuly.',
            'title'    => 'Logout Success!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  303,
            'message' =>    'We have send you email, visit link and change password.',
            'title'    => 'Reset Password Email Send',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  304,
            'message' =>    'User App setting change successfuly.',
            'title'    => 'Change App Setting!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  305,
            'message' =>    'Your payment preferences setting change successfuly.',
            'title'    => 'Payment Preferences Changed!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  401,
            'message' =>    'Validation error',
            'title'    => 'Validation Error',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   401,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  500,
            'message' =>    'Please contact to eclipse team.',
            'title'    => 'Server Error',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   500,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        ##### Assignment Response ########
        DB::table('api_notifications')->insert([
            'id'    =>  600,
            'message' =>    'Time of asssignment is updated.',
            'title'    => 'Time Update!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  601,
            'message' =>    'Assignment check in-out is sucessfuly completed.',
            'title'    => 'Done Check In-Out!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  660,
            'message' =>    'Reimbursement create successfuly!.',
            'title'    => 'Reimbursement Done!',
            'btn_cancel'  =>   'Ok',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        ##### Invitation Response ########
        DB::table('api_notifications')->insert([
            'id'    =>  700,
            'message' =>    'Invitation accepted successfuly!.',
            'title'    => 'Invite Accepted!',
            'btn_cancel'  =>   'Ok',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
    }
}
