<?php

namespace Database\Seeders;

use App\Models\Tenant\Company;
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
		Company::truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		$companies = [
			[
				'name' => 'Acme Corporation',
				'added_by' => '1',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Steuber LLC',
				'added_by' => '1',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Padberg-Schmitt',
				'added_by' => '1',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Keeling-Bogisich',
				'added_by' => '1',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Wolff-Schmeler',
				'added_by' => '1',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Gislason, Schmitt and Ledner',
				'added_by' => '1',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'McGlynn, Donnelly and Jones',
				'added_by' => '1',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Dickinson and Sons',
				'added_by' => '1',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Skiles Inc',
				'added_by' => '1',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Nikolaus-Wisoky',
				'added_by' => '1',
				'created_at' => now(),
				'updated_at' => now(),
			],
		];

		Company::insert($companies);
	}
}
