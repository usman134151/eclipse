<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{

    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            $email = "customer{$i}@example.com";
            $name = "Customer {$i}";
            $firstName = "Customer";
            $lastName = $i;

            // Insert user
            DB::table('users')->updateOrInsert(
                ['email' => $email],
                [
                    'name' => $name,
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'email' => $email,
                    'company_name' => rand(1, 3),
                    'password' => bcrypt('Test!836'),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );

            $user = DB::table('users')->where('email', $email)->first();

            // Insert role_user
            DB::table('role_user')->updateOrInsert(
                ['user_id' => $user->id],
                [
                    'role_id' => 4,
                    'user_id' => $user->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
        }
    }
}
?>
