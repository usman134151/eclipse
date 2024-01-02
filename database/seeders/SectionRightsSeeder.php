<?php

namespace Database\Seeders;

use App\Models\Tenant\Right;
use App\Models\Tenant\SectionRight;
use App\Models\Tenant\SystemRole;
use App\Models\Tenant\SystemSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionRightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $systemRole = SystemRole::where('system_role_name', 'Account Admin')->first();

        // Get all section IDs from the sections table
        $sectionIds = SystemSection::pluck('id')->toArray();

        // array of right IDs
        $rightIds =  Right::pluck('id')->toArray(); // 1=>view, 2=>add, 3=>edit, 4=>delete, 5=>all

        if ($systemRole) {
            // Insert rows for each section ID and right ID pair
            foreach ($sectionIds as $sectionId) {
                foreach ($rightIds as $rightId) {
                    SectionRight::create([
                        'system_role_id' => $systemRole->id, // Assuming "System admin" role id is 1
                        'section_id' => $sectionId,
                        'right_id' => $rightId,
                    ]);
                }
            }
        }
    }
}
