<?php

use Illuminate\Database\Seeder;

class DatabaseTenantSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(RolesTableSeeder::class);
      $this->call(StatusTableSeeder::class);
      $this->call(CountrySeeder::class);
      $this->call(StateSeeder::class);
      $this->call(notification_templatesSeeder::class);
      $this->call(sms_seeder::class);
      $this->call(TemplateSeeder::class);

    }
}
