<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PlanPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscription_plan_permissions')->insert([
            'sub_plan_id' => '1',
            'total_bookings' => '200',
            'total_providers' => '50',
            'total_staff' => '50',
            'created_at'  =>now(),
            'updated_at' => now()
        ]);
    }
}
