<?php

namespace Database\Seeders;

use App\Models\Tenant\SystemSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemSectionsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('system_sections')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		$assignment = SystemSection::create([
			'section_name' => 'Assignment',
			'parent_id' => null,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		$customer = SystemSection::create([
			'section_name' => 'Customers',
			'parent_id' => null,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		$provider = SystemSection::create([
			'section_name' => 'Providers',
			'parent_id' => null,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		$report = SystemSection::create([
			'section_name' => 'Reports',
			'parent_id' => null,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		$systemLog = SystemSection::create([
			'section_name' => 'System Logs',
			'parent_id' => null,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		$businessProfileSetting = SystemSection::create([
			'section_name' => 'Business Profile & Settings',
			'parent_id' => null,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		$accommodationsServicesSetup = SystemSection::create([
			'section_name' => 'Accommodations & Services Setup',
			'parent_id' => null,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		$specialization = SystemSection::create([
			'section_name' => 'Specializations',
			'parent_id' => null,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		$industry = SystemSection::create([
			'section_name' => 'Industries',
			'parent_id' => null,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		$savedForm = SystemSection::create([
			'section_name' => 'Saved Forms',
			'parent_id' => null,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		$couponsReferralsSetup = SystemSection::create([
			'section_name' => 'Coupons & Referrals Setup',
			'parent_id' => null,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		$platformIntegration = SystemSection::create([
			'section_name' => 'Platform Integrations',
			'parent_id' => null,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		$adminStaff = SystemSection::create([
			'section_name' => 'Admin-Staff',
			'parent_id' => null,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		$supportTicket = SystemSection::create([
			'section_name' => 'Support Tickets',
			'parent_id' => null,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		$assignmentData = [
			[
				'section_name' => 'Assignments (Today, Upcoming, Past, Pending)',
				'parent_id' => $assignment->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Booking Form',
				'parent_id' => $assignment->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Quotes & Leads Module',
				'parent_id' => $assignment->id,
				'created_at' => now(),
				'updated_at' => now()
			],
		];

		$customerData = [
			[
				'section_name' => 'Add / Edit / Deactivate Company & Customers',
				'parent_id' => $customer->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Companies (List, Profiles)',
				'parent_id' => $customer->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Customers (List, Profiles)',
				'parent_id' => $customer->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Customer Pricing',
				'parent_id' => $customer->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Invoice Generator',
				'parent_id' => $customer->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Customer Invoices',
				'parent_id' => $customer->id,
				'created_at' => now(),
				'updated_at' => now()
			],
		];

		$providerData = [
			[
				'section_name' => 'Add / Edit / Deactivate Provider & Provider Teams',
				'parent_id' => $provider->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Provider Teams (List)',
				'parent_id' => $provider->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Providers (List, Profiles)',
				'parent_id' => $provider->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Provider Rates',
				'parent_id' => $provider->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Applications & Screenings',
				'parent_id' => $provider->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Reimbursements',
				'parent_id' => $provider->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Remittance Generator',
				'parent_id' => $provider->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Payment Manager',
				'parent_id' => $provider->id,
				'created_at' => now(),
				'updated_at' => now()
			],
		];

		$businessProfileSettingData = [
			[
				'section_name' => 'Account Profile',
				'parent_id' => $businessProfileSetting->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Business Setup',
				'parent_id' => $businessProfileSetting->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Notification Controls',
				'parent_id' => $businessProfileSetting->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Email Notifications',
				'parent_id' => $businessProfileSetting->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'SMS Notifications',
				'parent_id' => $businessProfileSetting->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Password Reset',
				'parent_id' => $businessProfileSetting->id,
				'created_at' => now(),
				'updated_at' => now()
			],
		];

		$accommodationsServicesSetupData = [
			[
				'section_name' => 'View Services & Accommodations',
				'parent_id' => $accommodationsServicesSetup->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Add/Edit Services & Accommodations',
				'parent_id' => $accommodationsServicesSetup->id,
				'created_at' => now(),
				'updated_at' => now()
			],
		];

		$specializationData = [
			[
				'section_name' => 'View Specializations',
				'parent_id' => $specialization->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'View / Edit Specializations',
				'parent_id' => $specialization->id,
				'created_at' => now(),
				'updated_at' => now()
			],
		];

		$industryData = [ 
			[
				'section_name' => 'View Industries',
				'parent_id' => $industry->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'View / Edit Industries',
				'parent_id' => $industry->id,
				'created_at' => now(),
				'updated_at' => now()
			],
		];

		$savedFormData = [ 
			[
				'section_name' => 'View Customized Forms',
				'parent_id' => $savedForm->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'View / Edit Customized Forms',
				'parent_id' => $savedForm->id,
				'created_at' => now(),
				'updated_at' => now()
			],
		];

		$couponsReferralsSetupData = [ 
			[
				'section_name' => 'View Coupons',
				'parent_id' => $couponsReferralsSetup->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Add / Edit Coupons',
				'parent_id' => $couponsReferralsSetup->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'View Referrals',
				'parent_id' => $couponsReferralsSetup->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Add / Edit Referrals',
				'parent_id' => $couponsReferralsSetup->id,
				'created_at' => now(),
				'updated_at' => now()
			],
		];

		$platformIntegrationData = [ 
			[
				'section_name' => 'QuickBooks',
				'parent_id' => $platformIntegration->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Stripe',
				'parent_id' => $platformIntegration->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Calendar Sync',
				'parent_id' => $platformIntegration->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Drive Sync',
				'parent_id' => $platformIntegration->id,
				'created_at' => now(),
				'updated_at' => now()
			],
		];

		$adminStaffData = [ 
			[
				'section_name' => 'Add / Edit / Deactivate Admin-Staff',
				'parent_id' => $adminStaff->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'View Admin-Staff',
				'parent_id' => $adminStaff->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'Add / Edit / Deactivate Admin-Staff Teams',
				'parent_id' => $adminStaff->id,
				'created_at' => now(),
				'updated_at' => now()
			],
			[
				'section_name' => 'View Admin-Staff Teams',
				'parent_id' => $adminStaff->id,
				'created_at' => now(),
				'updated_at' => now()
			],
		];

		SystemSection::insert($assignmentData);
		SystemSection::insert($customerData);
		SystemSection::insert($providerData);
		SystemSection::insert($businessProfileSettingData);
		SystemSection::insert($accommodationsServicesSetupData);
		SystemSection::insert($specializationData);
		SystemSection::insert($industryData);
		SystemSection::insert($savedFormData);
		SystemSection::insert($couponsReferralsSetupData);
		SystemSection::insert($platformIntegrationData);
		SystemSection::insert($adminStaffData);
	}
}
