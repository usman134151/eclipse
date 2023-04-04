<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('companies')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		DB::table('companies')->updateOrInsert(
			['name' => 'Acme Corporation'],
			[
				'name' => 'Acme Corporation',
				'status' => '1',
				'added_by' => '1',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]
		);

		DB::table('companies')->updateOrInsert(
			['name' => 'Globex Corporation'],
			[
				'name' => 'Globex Corporation',
				'status' => '1',
				'added_by' => '1',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]
		);

		DB::table('companies')->updateOrInsert(
			['name' => 'Soylent Corp'],
			[
				'name' => 'Soylent Corp',
				'status' => '1',
				'added_by' => '1',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			]
		);
	}
}
