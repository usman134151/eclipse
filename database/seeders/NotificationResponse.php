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
        DB::table('notifications')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notifications')->insert([
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
        DB::table('notifications')->insert([
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
        DB::table('notifications')->insert([
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
        DB::table('notifications')->insert([
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
        DB::table('notifications')->insert([
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
    }
}
