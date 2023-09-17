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
     // $this->call(BookingsSeeder::class); //added records in booking table by Sohail
      $this->call(SetupSeeder::class); //added records in setup table by Amna Bilal
      $this->call(SetupValuesSeeder::class); //added records in setup values table by Amna Bilal
      $this->call(NavigatorTableSeeder::class);//added by Amna Bilal for dashboard navigator
      $this->call(RightsSeeder::class); // Added records in rights table by Sohail
      $this->call(SystemSectionsSeeder::class); // Added records in system_sections table by Sohail
      $this->call(TimezoneSeeder::class);
      $this->call(RolesCustomerSeeder::class);
      $this->call(NotificationSeeder::class); //added records in setup table by Amna Bilal
      $this->call(NotificationTagsSeeder::class); //added records in setup table by Amna Bilal
      $this->call(SetupSeederForDocumentTypes::class); //added records in setup table by Amna Bilal
      
      $this->call(BookingColorCodesSeeder::class); //added records in setup table by Amna Bilal
    }

}
