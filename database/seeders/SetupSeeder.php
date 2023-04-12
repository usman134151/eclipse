<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function __construct()
     {
         DB::statement('SET FOREIGN_KEY_CHECKS=0;');
         DB::table('setup')->truncate();
         DB::statement('SET FOREIGN_KEY_CHECKS=1;');
     }
    public function run()
    {

        DB::table('setup')->insert([
            [
                'setup_value' => 'Languages',
                'setup_deleteable'=>1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'setup_value' => 'Gender',
                'setup_deleteable'=>1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'setup_value' => 'Ethnicity',
                'setup_deleteable'=>1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'setup_value' => 'Timezone',
                'setup_deleteable'=>1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'setup_value' => 'Service Types',
                'setup_deleteable'=>0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'setup_value' => 'Scheduling Frequencies',
                'setup_deleteable'=>0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'setup_value' => 'Customer Form Name',
                'setup_deleteable'=>0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'setup_value' => 'Provider Certifications',
                'setup_deleteable'=>1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

    }
}
