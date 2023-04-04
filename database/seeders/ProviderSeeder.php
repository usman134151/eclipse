<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProviderSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            $email = "provider{$i}@example.com";
            $name = "Provider {$i}";
            $firstName = "Provider";
            $lastName = $i;

            // Insert user
            DB::table('users')->updateOrInsert(
                ['email' => $email],
                [
                    'name' => $name,
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'company_name' => rand(1, 3),
                    'email' => $email,
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
                    'role_id' => 2,
                    'user_id' => $user->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
        }
    }
}

?>