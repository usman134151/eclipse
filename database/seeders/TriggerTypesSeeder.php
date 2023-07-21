<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriggerTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $trigger_types = array(
			["name"=>"Account Management"],
			["name"=>"Booking Management & Updates"],
			["name"=>"Broadcast & Assign"],
			["name"=>"Financials"],
        );
        foreach ($trigger_types as $type) {
            DB::table('trigger_types')->insert($type);
        }
    }
}
