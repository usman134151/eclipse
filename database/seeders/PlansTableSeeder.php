<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('subscription_plans')->insert([
             'recurring_period' => 'monthly',
             'name' => 'startup',
             'price' => '349',
             'sale_price' => '199',
             'status' => '1',
             'added_by' => '1',
             'created_at'  =>now(),
             'updated_at' => now()
         ]);
     }
}
