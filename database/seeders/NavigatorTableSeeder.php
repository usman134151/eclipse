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
                'navigator_label' => 'Invoice Generator',         
                'navigator_icon' => '/css/dashboard.svg#invoice-icon',
                'navigator_link' => '/admin/draft-invoices ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'navigator_label' => 'Invoice Manager',       
                'navigator_icon' => '/css/dashboard.svg#invoice-manager',
                'navigator_link' => '/admin/customer-invoices ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          [
                'navigator_label' => 'Remittance Generator',
                'navigator_icon' => '/css/dashboard.svg#remitance-icon',
                'navigator_link' => '/admin/provider/remittances',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          [
                'navigator_label' => 'Payment Manager',
                'navigator_icon' => '/css/dashboard.svg#payment-icon',
                'navigator_link' => '/admin/provider/pending-payments',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          [
                'navigator_label' => 'Quotes & Leads',
                'navigator_icon' => '/css/dashboard.svg#quotes-icon',
                'navigator_link' => '/admin/quotes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          [
                'navigator_label' => 'Chat',
                'navigator_icon' => '/css/dashboard.svg#chat-icon',
                'navigator_link' => '/chat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          [
                'navigator_label' => 'Providers',
                'navigator_icon' => '/css/dashboard.svg#provider-icon',
                'navigator_link' => '/admin/provider',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          [
                'navigator_label' => 'Companies',
                'navigator_icon' => '/css/dashboard.svg#company-icon',
                'navigator_link' => '/admin/company',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          [
                'navigator_label' => 'Reports',
                'navigator_icon' => '/css/dashboard.svg#report-icon',
                'navigator_link' => '/admin/reports ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          [
                'navigator_label' => 'Applications',
                'navigator_icon' => '/css/dashboard.svg#application-icon',
                'navigator_link' => '/admin/provider-applications',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}











