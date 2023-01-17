<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LanguageTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('languages')->insert([
      'name' => 'English',
      'status'=>"1",
      'added_by'=>1,
      'created_at' => now(),
    ]);
    DB::table('languages')->insert([
      'name' => 'Sign language',
      'status'=>"0",
      'added_by'=>1,
      'created_at' => now(),
    ]);
    DB::table('languages')->insert([
      'name' => 'Closed captions',
      'status'=>"0",
      'added_by'=>1,
      'created_at' => now(),
    ]);
  }
}
