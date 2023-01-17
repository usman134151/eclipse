<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BusinessSetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business_setups')->insert([
            'user_id' => 1,
            'business_start_time' => "08:00",
            'business_end_time' =>  "17:00",
            'after_start_time' => "17:00",
            'after_end_time' => "08:00",
            'created_at'  =>now(),
            'updated_at' => now()
        ]);
    }
}
