<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavigatorTableSeeder extends Seeder
{
    public function __construct()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('navigators')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
    public function run()
    {
        

        DB::table('navigators')->insert([
            [
                'navigator_label' => 'invoice manager',
                'navigator_icon' => 'invoice-manager',
                'navigator_link' => '/admin/draft-invoices',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'navigator_label' => 'invoice generator',
                'navigator_icon' => 'invoice-generator',
                'navigator_link' => '/admin/customer-invoices',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
