<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class TenantDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UsersTableSeeder::class);
      $this->call(RolesTableSeeder::class);
      $this->call(RoleUserTableSeeder::class);
      $this->call(StatusTableSeeder::class);
      $this->call(UserDetailSeeder::class);
      $this->call(CountrySeeder::class);
      $this->call(StateSeeder::class);
      $this->call(LanguageTableSeeder::class);
      $this->call(notification_templatesSeeder::class);
      $this->call(sms_seeder::class);
      $this->call(TemplateSeeder::class);
      $this->call(PlansTableSeeder::class);
      $this->call(PlanPermissionSeeder::class);
      #### Add Custome Seeder For ApiReponse By Sakhawat #####
      $this->call(NotificationResponse::class);
      $this->call(BookingsSeeder::class); //added records in booking table by Sohail
      $this->call(SetupSeeder::class); //added records in setup table by Amna Bilal
      $this->call(SetupValuesSeeder::class); //added records in setup values table by Amna Bilal
      $this->call(ProviderSeeder::class); //added records for providers table by Amna Bilal
      $this->call(CustomerSeeder::class); //added records for customer table by Shanilla Wali
      $this->call(Coupons_Seeder::class); //added records for customer table by Safia Liaqat

    }

}
