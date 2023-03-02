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
            'id'    =>  306,
            'message' =>    'Opt code is send on your mail.',
            'title'    => 'OPT Code Send!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  307,
            'message' =>    'Opt code is invaild.',
            'title'    => 'In-vaild OPT!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   401,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  308,
            'message' =>    'Opt code mathed.',
            'title'    => 'OPT Matched!',
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
            'id'    =>  402,
            'message' =>    'Unauthenticated access error.',
            'title'    => 'Unauthenticated',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   401,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  403,
            'message' =>    'Email & Password does not match with our record.',
            'title'    => 'Result Not Found!',
         
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
            'message' =>    'Assignment check-in sucessfuly completed.',
            'title'    => 'Check-In Done!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  602,
            'message' =>    '1st step of check-out assignment done sucessfuly completed.',
            'title'    => '1st Check-Out Done!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  603,
            'message' =>    '2nd step of check-out assignment done sucessfuly completed.',
            'title'    => '2nd Step Check-Out Done!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  604,
            'message' =>    '3rd step of check-out assignment done sucessfuly completed.',
            'title'    => '3rd Step Check-Out Done!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  605,
            'message' =>    'Check-out assignment done sucessfuly completed.',
            'title'    => 'Check-Out Done!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  606,
            'message' =>    'Assignment location is verified.',
            'title'    => 'Location Verified!',
            'btn_cancel'  =>   '',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  607,
            'message' =>    'Assignment location is un-verified.',
            'title'    => 'Location Un-Verified!',
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
        DB::table('api_notifications')->insert([
            'id'    =>  661,
            'message' =>    'Availability set successfuly!.',
            'title'    => 'Availability Update',
            'btn_cancel'  =>   'Ok',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  662,
            'message' =>    'Read all notification successfuly!.',
            'title'    => 'Read Notification',
            'btn_cancel'  =>   'Ok',
            'btn_link'  =>   '',
            'base_code' =>   200,
            'type' =>   'response' ,
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
        DB::table('api_notifications')->insert([
            'id'    =>  663,
            'message' =>    'Generate invoice successfuly!.',
            'title'    => 'Invoice Generate Done!',
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
