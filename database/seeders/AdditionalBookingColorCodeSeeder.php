<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdditionalBookingColorCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $setupRecord = DB::table('setup')->where('setup_value', 'Booking color codes')->first();
        $setupId = $setupRecord->id;

        // Insert the values into the setup_values table
        DB::table('setup_values')->insert([
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#FFFFFF',
                'setup_value_alt_id' => 'Invitation',
            ]
        ]);
    }
}
