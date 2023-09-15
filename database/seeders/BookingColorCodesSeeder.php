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
        // Insert the setup record
        $setupId = DB::table('setup')->insertGetId([
            'setup_value' => 'Booking color codes',
            'setup_deleteable' => 0,
        ]);

        // Insert the values into the setup_values table
        DB::table('setup_values')->insert([
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#aaa',
                'setup_value_alt_id' => 'Cancelled',
            ],
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#ccc',
                'setup_value_alt_id' => 'Completed Assignment',
            ],
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#FFA500',
                'setup_value_alt_id' => 'Unassigned',
            ],
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#FFFF00',
                'setup_value_alt_id' => 'Partially Assigned',
            ],
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#0000FF',
                'setup_value_alt_id' => 'Fully assigned',
            ],
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#FF0000',
                'setup_value_alt_id' => 'Provider Running Late',
            ],
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#00FF00',
                'setup_value_alt_id' => 'Provider Checked-in',
            ],
            [
                'setup_id' => $setupId,
                'setup_value_label' => '#800080',
                'setup_value_alt_id' => 'Information/Document Request Pending',
            ],
        ]);
    }
}
