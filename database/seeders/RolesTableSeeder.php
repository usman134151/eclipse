<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function __construct()
     {
         DB::statement('SET FOREIGN_KEY_CHECKS=0;');
         DB::table('roles')->truncate();
         DB::statement('SET FOREIGN_KEY_CHECKS=1;');
     }
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'name' => 'provider',
            'display_name' => 'Provider',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'name' => 'staff',
            'display_name' => 'Staff',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'name' => 'customer',
            'display_name' => 'Customer',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // DB::table('roles')->insert([
        //     'name' => 'consumer',
        //     'display_name' => 'Consumer',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        // DB::table('roles')->insert([
        //     'name' => 'admin-staff',
        //     'display_name' => 'Admin-staff',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
    }
}
