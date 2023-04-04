<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	 public function run()
	 {
		 DB::table('users')->updateOrInsert(
			 ['email' => 'eclipsetestadmin@dispostable.com'],
			 [
			 'first_name' => 'Admin',
			 'last_name' => 'Admin',
			 'name' => 'Admin',
			 'company_name' => rand(1, 3),
			 'email' => 'eclipsetestadmin@dispostable.com',
			 'password' => bcrypt('test!836'),
			 'status'  =>'1',
			//  'added_by'  =>'1',
			 'created_at'  =>now(),
			 'updated_at' => now()
		 ]);
		 DB::table('users')->updateOrInsert(
			 ['email' => 'eclipsetestprovider@dispostable.com'],
			 [
			 'name' => 'Provider',
			 'company_name' => rand(1, 3),
			 'first_name' => 'Provider',
			 'last_name' => 'Provider',
			 'email' => 'eclipsetestprovider@dispostable.com',
			 'password' => bcrypt('test!836'),
			 'status'  =>'1',
			//  'added_by'  =>'1',
			 'created_at'  =>now(),
			 'updated_at' => now()
		 ]);
		 DB::table('users')->updateOrInsert(
			 ['email' => 'eclipsetestsupervisor@dispostable.com'],
			 [
			 'first_name' => 'Supervisor',
			 'last_name' => 'Supervisor',
			 'name' => 'Supervisor',
			 'company_name' => rand(1, 3),
			 'email' => 'eclipsetestsupervisor@dispostable.com',
			 'password' => bcrypt('test!836'),
			//  'added_by'  =>'1',
			 'status'  =>'1',
			 'created_at'  =>now(),
			 'updated_at' => now()
		 ]);
		 DB::table('users')->updateOrInsert(
			 ['email' => 'eclipseteststaff@dispostable.com'],
			 [
			 'first_name' => 'Staff',
			 'last_name' => 'Staff',
			 'name' => 'Staff',
			 'company_name' => rand(1, 3),
			 'email' => 'eclipseteststaff@dispostable.com',
			 'password' => bcrypt('test!836'),
			//  'added_by'  =>'1',
			 'status'  =>'1',
			 'created_at'  =>now(),
			 'updated_at' => now()
		 ]);
		 DB::table('users')->updateOrInsert(
			 ['email' => 'eclipsetestconsumer@dispostable.com'],
			 [
			 'first_name' => 'Consumer',
			 'last_name' => 'Consumer',
			 'name' => 'Consumer',
			 'company_name' => rand(1, 3),
			 'email' => 'eclipsetestconsumer@dispostable.com',
			 'password' => bcrypt('test!836'),
			//  'added_by'  =>'1',
			 'status'  =>'1',
			 'created_at'  =>now(),
			 'updated_at' => now()
		 ]);
		 // DB::table('users')->insert([
		 //     'first_name' => 'Admin-staff',
		 //     'last_name' => 'Admin-staff',
		 //     'name' => 'Admin-staff',
		 //     'email' => 'adminstaff123@yopmail.com',
		 //     'password' => bcrypt('test!836'),
		 //     'added_by'  =>'1',
		 //     'status'  =>'1',
		 //     'created_at'  =>now(),
		 //     'updated_at' => now()
		 // ]);
	 }
}
