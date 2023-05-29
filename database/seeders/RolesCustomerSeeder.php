<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenant\Role;
use DB;

class RolesCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function __construct()
     {
      
     }
     public function run()
     {
         $roles = [
             ['id' => 5, 'name' => 'supervisor', 'display_name' => 'Supervisor', 'role_type' => 2],
             ['id' => 6, 'name' => 'requester', 'display_name' => 'Requester', 'role_type' => 2],
             ['id' => 7, 'name' => 'consumer', 'display_name' => 'Service Consumer', 'role_type' => 2],
             ['id' => 8, 'name' => 'participant', 'display_name' => 'Participant', 'role_type' => 2],
             ['id' => 9, 'name' => 'billing_manager', 'display_name' => 'Billing Manager', 'role_type' => 2],
             ['id' => 10, 'name' => 'company_admin', 'display_name' => 'Company Admin', 'role_type' => 2],
         ];
 
         foreach ($roles as $roleData) {
             Role::updateOrCreate(['id' => $roleData['id']], $roleData);
         }
     }
}
