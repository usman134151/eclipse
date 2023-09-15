<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingColorCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setupRecord = DB::table('setup')->updateOrInsert(
            ['setup_value' => 'Booking color codes'],
            ['setup_deleteable' => 0]
        );
        
        $setupRecord = DB::table('setup')->where('setup_value', 'Booking color codes')->first();
        $setupId = $setupRecord->id;

        // Delete old values in the setup_values table where setup_id is $setupId
        DB::table('setup_values')->where('setup_id', $setupId)->delete();
        // Insert the values into the setup_values table
        DB::table('setup_values')->insert([
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#777770',
                'setup_value_alt_id' => 'Cancelled',
            ],
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#7a7672',
                'setup_value_alt_id' => 'Completed Assignment',
            ],
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#cc4e00',
                'setup_value_alt_id' => 'Unassigned',
            ],
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#FFC107',
                'setup_value_alt_id' => 'Partially Assigned',
            ],
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#0363DB',
                'setup_value_alt_id' => 'Fully assigned',
            ],
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#E60305',
                'setup_value_alt_id' => 'Provider Running Late',
            ],
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#175D08',
                'setup_value_alt_id' => 'Provider Checked-in',
            ],
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#CD9BFF',
                'setup_value_alt_id' => 'Information/Document Request Pending',
            ],
        ]);
    }
}
