<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_details')->updateOrInsert(
          ['user_id' => '1'], ['user_id' => '1', 'permission' => '1']);

      DB::table('user_details')->updateOrInsert(
          ['user_id' => '2'], ['user_id' => '2',]);

      DB::table('user_details')->updateOrInsert(
          ['user_id' => '3'], ['user_id' => '3',]);

      DB::table('user_details')->updateOrInsert(
          ['user_id' => '4'], ['user_id' => '4',]);

      DB::table('user_details')->updateOrInsert(
          ['user_id' => '5'], ['user_id' => '5',]);

      // DB::table('user_details')->insert([
      //     'user_id' => '6'
      // ]);
    }
}
