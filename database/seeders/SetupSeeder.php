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
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'setup_value' => 'Gender',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'setup_value' => 'Ethnicity',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'setup_value' => 'Timezone',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'setup_value' => 'Service Types',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'setup_value' => 'Scheduling Frequencies',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'setup_value' => 'Customer Form Name',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
        
    }
}
