<?php

namespace Database\Seeders;

use App\Models\Tenant\Setup;
use App\Models\Tenant\SetupValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert record in the setup table
        $setup = new Setup();
        $setup->id = 10;
        $setup->setup_value = 'Booking Color Codes';
        $setup->status = 1;
        $setup->save();

        // Insert records in the setup_values table
        $setupId = 10;
        $setupValues = [
        'Dark Grey - Cancelled',
        'Light Grey - Completed Assignment',
        'Orange - Unassigned',
        'Yellow - Partially Assigned',
        'Blue - Fully assigned',
        'Red - Provider Running Late',
        'Green - Provider Checked-in',
        'Purple - Information/Document Request Pending'
        ];

        foreach ($setupValues as $value) {
            $setupValue = new SetupValue();
            $setupValue->setup_id = $setupId;
            $setupValue->setup_value_label = $value;
            $setupValue->save();
        }
    }
    
}
