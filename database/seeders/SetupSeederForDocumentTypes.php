<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenant\Setup;
use App\Models\Tenant\SetupValue;

class SetupSeederForDocumentTypes extends Seeder
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
        $setup->id = 9;
        $setup->setup_value = 'Document Types';
        $setup->status = 1;
        $setup->save();

        // Insert records in the setup_values table
        $setupId = 9;
        $setupValues = [
            'Resume',
            'Certification(s)',
            'Liability Insurance(s)',
            'Car Insurance',
            'Contract',
            'Membership',
            'Tax Document(s)',
            'Billing Document(s)',
            'Medical Document(s)',
            'Payment Information',
            'Other',
        ];

        foreach ($setupValues as $value) {
            $setupValue = new SetupValue();
            $setupValue->setup_id = $setupId;
            $setupValue->setup_value_label = $value;
            $setupValue->save();
        }
    }
}