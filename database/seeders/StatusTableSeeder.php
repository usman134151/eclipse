<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('status')->insert([
          'name' => 'Unassigned',
          'updated_at' => now()
      ]);
      DB::table('status')->insert([
          'name' => 'Assigned',
          'updated_at' => now()
      ]);
      DB::table('status')->insert([
          'name' => 'Cancelled-Unbillable',
          'updated_at' => now()
      ]);
      DB::table('status')->insert([
          'name' => 'Cancelled-Billable',
          'updated_at' => now()
      ]);
      DB::table('status')->insert([
          'name' => 'Completed',
          'updated_at' => now()
      ]);
      DB::table('status')->insert([
          'name' => 'Remitted',
          'updated_at' => now()
      ]);
      DB::table('status')->insert([
          'name' => 'Paid',
          'updated_at' => now()
      ]);
    }
}
