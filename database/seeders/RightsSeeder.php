<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RightsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('rights')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		DB::table('rights')->updateOrInsert(
			['right_type' => 'view'],
			[
				'right_type' => 'view',
				'created_at' => now(),
				'updated_at' => now(),
			]
		);

		DB::table('rights')->updateOrInsert(
			['right_type' => 'add'],
			[
				'right_type' => 'add',
				'created_at' => now(),
				'updated_at' => now(),
			]
		);

		DB::table('rights')->updateOrInsert(
			['right_type' => 'edit'],
			[
				'right_type' => 'edit',
				'created_at' => now(),
				'updated_at' => now(),
			]
		);

		DB::table('rights')->updateOrInsert(
			['right_type' => 'delete'],
			[
				'right_type' => 'delete',
				'created_at' => now(),
				'updated_at' => now(),
			]
		);

		DB::table('rights')->updateOrInsert(
			['right_type' => 'all'],
			[
				'right_type' => 'all',
				'created_at' => now(),
				'updated_at' => now(),
			]
		);
	}
}
