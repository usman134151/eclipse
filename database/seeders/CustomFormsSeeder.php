<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomFormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customerFormNames = [
            'Check In Form','Check Out Form'];
        $setup = DB::table('setup')->where('setup_value', 'Customer Form Name')->first();
        foreach ($customerFormNames as $customerFormName) {
            DB::table('setup_values')->insert([
                'setup_id' => $setup->id,
                'setup_value_label' => $customerFormName,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        //
    }
}
