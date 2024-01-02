<?php

namespace Database\Seeders;

use App\Models\Tenant\SystemRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SystemRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SystemRole::create([
            'system_role_name' => 'Account Admin',
            'status' => 1, 
        ]);
    }
}
