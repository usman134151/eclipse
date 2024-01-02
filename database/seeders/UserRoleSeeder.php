<?php

namespace Database\Seeders;

use App\Models\Tenant\SystemRole;
use App\Models\Tenant\SystemRoleUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $systemRole = SystemRole::where('system_role_name', 'Account Admin')->first();

        if ($systemRole) {
            SystemRoleUser::create([
                'user_id' => 1, // Assuming user id 1
                'system_role_id' => $systemRole->id,
            ]);
        }
    }
}
