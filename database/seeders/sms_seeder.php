<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class sms_seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function __construct()
  {
    DB::table('sms_templates')->truncate();
  }

  public function run()
  {
    $sms_templates = array(
      array('id' => '1','trigger'=>'assignment-scheduled','role_id' => '1','name' => 'New Assignment Schedule','slug' => 'New booking added by customer (not by admin)','body' => '@consumer  has submitted a new request for services!
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-03 22:52:09'),
      array('id' => '2','trigger'=>'assignment-scheduled','role_id' => '2','name' => 'New Assignment Schedule','slug' => 'New booking added to provider schedule','body' => '@admin_company has added a new assignment to your schedule:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-03 22:53:35'),
      array('id' => '3','trigger'=>'assignment-scheduled','role_id' => '5','name' => 'New Assignment Schedule','slug' => 'New booking added to customer schedule','body' => '@admin_company has scheduled your service request:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-03 22:58:11'),


      array('id' => '4','trigger'=>'new-assignment-referral' ,'role_id' => '1','name' => 'New Assignment via Referral','slug' => 'referral code redeemed','body' => 'Congratulations, you received a new referral! @consumer  has submitted their first service request!
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 00:27:58'),


      array('id' => '5','trigger'=>'assignment-modified','role_id' => '1','name' => 'Assignment Modified','slug' => 'Customer modifies a booking (not admin)','body' => 'An upcoming assignment has been modified:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 00:42:25'),
      array('id' => '6','trigger'=>'assignment-modified','role_id' => '2','name' => 'Assignment Modified','slug' => 'Provider`s assignment is modified by admin or customer','body' => '@admin_company has modified your upcoming assignmnent:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 00:43:07'),
      array('id' => '7','trigger'=>'assignment-modified','role_id' => '5','name' => 'Assignment Modified','slug' => 'Customer\'s booking is modified by admin or customer','body' => '@admin_company has modified your upcoming service request:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 00:43:51'),

      array('id' => '8','trigger'=>'assignment-modification-request','role_id' => '1','name' => 'Assignment Modification Requested','slug' => 'Customer requests modification to step 1 within cancellation parameters','body' => '@consumer has requested a change to their upcoming service details:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 00:44:45'),
      array('id' => '9','trigger'=>'assignment-modification-request','role_id' => '5','name' => 'Assignment Modification Requested','slug' => 'Customer requests modification to step 1 within cancellation parameters','body' => 'You have requested a change to an upcoming service request:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        Because you requested this change outside the allotted timeframe,  @admin_company will need to approve your modifications. You will receive a follow-up notification shortly.
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 00:45:45'),

      array('id' => '10','trigger'=>'assignment-modification-denied','role_id' => '5','name' => 'Assignment Modification Denied','slug' => 'Admin denies a modification to step 1 of a service request','body' => 'You recently requested to modify your service request:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        Unfortunately, @admin_company is unable to accommodate these modifications so close to your service start time. In order to change your services, you will need to cancel or reschedule your request. We apologize for any inconvenience.
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 00:47:41'),

      array('id' => '11','trigger'=>'submit-request','role_id' => '1','name' => 'Consumer or Staff has Submitted a Service Request','slug' => 'New booking added by customer (not by admin) requires supervisor approval before being scheduled/confirmed','body' => '@consumer has submitted a new service request requiring supervisor approval:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 01:14:31'),
      array('id' => '12','trigger'=>'submit-request','role_id' => '5','name' => 'Consumer or Staff has Submitted a Service Request','slug' => 'Consumer or staff member submits a service request  Who receives: Supervisor','body' => '@consumer has submitted a new service request requiring your approval:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 01:15:12'),

      array('id' => '13', 'trigger'=>'approved-request' ,'role_id' => '1','name' => 'Supervisor has approved your service request','slug' => 'A supervisor approves a booking added by a consumer or staff member','body' => '@supervisor has approved a new service request for @customer_company  :
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 01:16:15'),
      array('id' => '14','trigger'=>'approved-request','role_id' => '5','name' => 'Supervisor has approved your service request','slug' => 'A supervisor approves a booking added by a consumer or staff member.  Who receives?: The user who submitted the original service request','body' => '@supervisor as approved your service request:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 01:16:47'),

      array('id' => '15','trigger'=>'denied-request','role_id' => '1','name' => 'Supervisor has denied your service request','slug' => 'A supervisor denied a booking added by a consumer or staff member.','body' => '@supervisor has denied the following service request for @admin_company:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 01:18:24'),
      array('id' => '16','trigger'=>'denied-request','role_id' => '5','name' => 'Supervisor has denied your service request','slug' => 'A supervisor denied a booking added by a consumer or staff member.   Who receives?: The user who submitted the original service request','body' => '@supervisor has denied the following service request:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 01:19:35'),

      array('id' => '17','trigger'=>'assignment-rescheduled','role_id' => '1','name' => 'Assignment Rescheduled','slug' => 'Customer reschedules a booking (not admin)','body' => 'An upcoming assignment has been rescheduled:
        Number: @booking_number
        Original Details:
        Start Time: @old_booking_start_at
        End Time: @old_booking_end_at
        Duration: @old_booking_duration
        Location: @old_booking_location
        Rescheduled Details:
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 01:37:28'),
      array('id' => '18','trigger'=>'assignment-rescheduled','role_id' => '2','name' => 'Assignment Rescheduled','slug' => 'Appointment on provider\'s schedule mofidied  Actions: If provider sends "1," reply "Thank you for replying. Your response has been recorded." If provider sends "2," unassign provider and reply "Thank you for replying. Your response has been recorded."','body' => 'Your upcoming assignment has been rescheduled:
        Number: @booking_number
        Original Details:
        Booking Number: @booking_number
        Start Time: @old_booking_start_at
        End Time: @old_booking_end_at
        Duration: @old_booking_duration
        Location: @old_booking_location
        Rescheduled Details:
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        Are you still available?
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 01:39:10'),
      array('id' => '19','trigger'=>'assignment-rescheduled', 'role_id' => '5','name' => 'Assignment Rescheduled','slug' => 'Appointment on customer\'s schedule is rescheduled','body' => 'Your upcoming service request has been rescheduled:
         Number: @booking_number
        Original Details:
        Booking Number: @booking_number
        Start Time: @old_booking_start_at
        End Time: @old_booking_end_at
        Duration: @old_booking_duration
        Location: @old_booking_location
        Rescheduled Details:
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 01:39:59'),

      array('id' => '20','trigger'=>'assignment-rescheduled-request','role_id' => '1','name' => 'Assignment Reschedule Request','slug' => 'Customer requests to reschedule a booking within cancellation parameters  Actions: If approved, reschedule and send associated notifications. If denied, send "denied" nofitication','body' => '@consumer has requested to reschedule their upcoming services:
         Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        To see more information or to reassign providers, log into your Eclipse portal.
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 01:41:42'),
      array('id' => '21','trigger'=>'assignment-rescheduled-request','role_id' => '5','name' => 'Assignment Reschedule Request','slug' => 'Customer requests to reschedule a booking within cancellation parameters','body' => 'You have requested to reschedule an upcoming service request:
        Booking Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @admin_company will respond if they are able to accommodate this last-minute change.
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 01:43:01'),

      array('id' => '22', 'trigger'=>'rescheduled-request-denied','role_id' => '5','name' => 'Assignment Reschedule Request Denied','slug' => 'Admin denies a customer\'s reschedule request','body' => 'You recently requested to reschedule your upcoming service request:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
         Unfortunately, @admin_company is unable to accommodate this modification so close to your service start time. In order to change your services, you will need to cancel and create a new service request. We apologize for any inconvenience.
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-04 01:58:01'),

      array('id' => '23','trigger'=>'assignment-cancelled','role_id' => '1','name' => 'Assignment Cancelled','slug' => 'A customer cancels an assignment (not admin). Triggers if the cancellation was inside and outside cancellation parameters.','body' => '@consumer has cancelled their upcoming services:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-06 22:40:33'),
      array('id' => '24','trigger'=>'assignment-cancelled','role_id' => '2','name' => 'Assignment Cancelled','slug' => 'Provider scheduled appointment is cancelled.','body' => 'Your upcoming assignment with @admin_company has been cancelled:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        Billable Status: @billing_status
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-06 22:43:04'),
      array('id' => '25','trigger'=>'assignment-cancelled','role_id' => '5','name' => 'Assignment Cancelled','slug' => 'Customer\'s scheduled appointment is cancelled.','body' => 'Your upcoming service request with @admin_company has been cancelled:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-06 22:44:48'),

      array('id' => '26','trigger'=>'payment-declined','role_id' => '1','name' => 'Payment Declined Notice','slug' => 'Customer credit card declined when hold is triggered','body' => '@consumer credit card was declined for payment for the following assignment(s):
         Number: @booking_number
        Reason for the declined card: @declined_card_reason
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-06 22:49:21'),
      array('id' => '27', 'trigger'=>'payment-declined','role_id' => '5','name' => 'Payment Declined Notice','slug' => 'Customer credit card declined when hold is triggered','body' => 'Your credit card was declined for payment for the following request(s):
        Number: @booking_number
        To prevent any interruption to your services, please update the credit card on file at your earliest convenience by logging into your @admin_company portal.
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-06 22:50:33'),

      array('id' => '28','trigger'=>'poor-provider-feedback','role_id' => '1','name' => 'Poor Provider Feedback Received','slug' => 'Customer submits feedback of 3 or less stars for a provider','body' => '@provider received poor feedback from @consumer after their assignment:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-06 22:51:21'),

      array('id' => '29','trigger' =>'update-provider-assign-request','role_id' => '5','name' => 'Updated Request- Providers Assigned','slug' => 'admin assigns max providers to customer\'s service request','body' => 'Hello @consumer,
        @admin_company has assigned providers to your upcoming service request:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        Providers: @assigned_providers
        To see more information, log into your @admin_company portal.
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-06 22:53:39'),

      array('id' => '30','trigger' =>'upcoming-assignment-reminder','role_id' => '1','name' => 'Upcoming Assignment Reminder (2-hours)','slug' => 'Send to admin within 2-hours of assignment start  Settings: User can turn on or off in notification settings','body' => 'You have a service request beginning in 2-hours:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-06 23:34:58'),
      array('id' => '31','trigger' =>'upcoming-assignment-reminder','role_id' => '2','name' => 'Upcoming Assignment Reminder (2-hours)','slug' => 'Send to provider within 2-hours of assignment start  Settings: User can turn on or off in notification settings  Actions: If 1 is sent, trigger admin "Running Late" notification for the assignment','body' => 'Your assignment with @admin_company begins in 2-hours:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        If you are delayed, please log into your Eclipse portal and press "Running Late."
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-06 23:36:00'),
      array('id' => '32','trigger' =>'upcoming-assignment-reminder','role_id' => '5','name' => 'Upcoming Assignment Reminder (2-hours)','slug' => 'Send to customer within 2-hours of assignment start  Settings: User can turn on or off in notification settings','body' => 'Your service request with @admin_company begins in 2-hours:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-06 23:36:43'),

      array('id' => '33','trigger' =>'unassigned-booking-available','role_id' => '1','name' => 'Unassigned Booking(s) Available','slug' => 'send nightly when assignments are in "Unassigned Assignments"','body' => 'Here is a recap of service requests that have not been assigned a provider yet:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        Customer Name: @consumer
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-06 23:39:33'),

      array('id' => '34','trigger' =>'direct-assignment-request-invitation','role_id' => '2','name' => 'Direct Assignment Request (Invitation)','slug' => 'admin send invitation to provider  Actions: if provider replies, send response: "Thank you, your response has been recorded." 1 and 2 should log available/unavailable same as emails.','body' => '@admin_company thinks you`d be a great match for this request:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        To respond, log into your Eclipse portal and go to "Invitations."
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-11 05:43:02'),

      array('id' => '35','trigger' =>'direct-assignment-request-reminder','role_id' => '2','name' => 'Direct Assignment Request Reminder','slug' => 'Send nightly to provider with list of all invitations  without reply','body' => 'Don\'t forget, @admin_company is awaiting your availability for the following request(s):
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-06 23:48:25'),

      array('id' => '36','trigger' =>'assignment-acceptance-confirmation','role_id' => '1','name' => 'Assignment Acceptance/Confirmation','slug' => 'provider is assigned to an unassigned booking via auto-assign***','body' => 'A provider has been confirmed for @consumer  upcoming service request:
        Provider Name: @provider
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-06 23:49:52'),
      array('id' => '37','trigger' =>'assignment-acceptance-confirmation','role_id' => '2','name' => 'Assignment Acceptance/Confirmation','slug' => 'Provider is assigned a new booking','body' => '@admin_company has confirmed you for an upcoming assignment:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        You are responsible for this assignment unless otherwise notified. If you\'re availability changes, log into your account to return the assignment or to contact a coordinator.
        @dashboard_url','type' => NULL,'created_at' => NULL,'updated_at' => '2021-06-06 23:53:18'),

      array('id' => '38','trigger' =>'assignment-surrender-request','role_id' => '1','name' => 'Provider Assignment Surrender Request','slug' => 'a provider requests to return an assignment within cancellation parameters.  Actions: Regardless of reply, always respond "Thank you, your response has been recorded." 1 should approve the assignment return and send associated notifications and 2 should d','body' => '@provider has requested to return the following assignment:

                Booking Number: @booking_number
                Start Time: @booking_start_at
                End Time: @booking_end_at
                Duration: @booking_duration
                Location: @booking_location
                Customer Name: @consumer

                Reply "1" to approve return and reply "2" to deny and leave the provider scheduled.

                @dashboard_url','type' => NULL,'created_at' => '2021-04-06 05:59:58','updated_at' => '2021-05-10 06:35:08'),

      array('id' => '39','trigger' =>'assignment-return-request-denied','role_id' => '2','name' => 'Provider Assignment Return Request Denied','slug' => 'Admin denies a provider\'s return request','body' => 'You recently requested to return the following assignment:

                Start Time: @booking_start_at
                End Time: @booking_end_at
                Duration: @booking_duration
                Location: @booking_location

                Unfortunately, @admin_company is unable to accommodate this modification so close to the service start time. Please arrange to provide services as originally scheduled. We apologize for any inconvenience.

                @dashboard_url','type' => NULL,'created_at' => '2021-04-06 06:03:14','updated_at' => '2021-05-10 06:36:48'),

      array('id' => '40','trigger' =>'running-late','role_id' => '1','name' => 'Provider Running Late','slug' => 'Provider clicks "running late" button or triggers the action','body' => '@provider has indicated they are running late to the following assignment:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        Customer Name: @consumer
        To alert the customer, log into your Eclipse portal.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-06 06:10:40','updated_at' => '2021-06-07 00:27:14'),
      array('id' => '41','trigger' =>'running-late','role_id' => '5','name' => 'Provider Running Late','slug' => 'Admin pushes or triggers "Alert Customer" after a provider indicates they are running late','body' => 'We regret to report our providers will be delayed in arriving to your location:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        Provider Name: @provider
        Please rest assured that our providers will arrive shortly and will provide services for the full duration of your original request. We apologize for any inconvenience this has caused and appreciate your patience and understanding.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-06 06:16:46','updated_at' => '2021-06-07 00:29:26'),

      array('id' => '42','trigger' =>'quote-request','role_id' => '1','name' => 'New Customer Quote Request','slug' => 'someone submits a lead form','body' => '@consumer has requested a quote for services.
         @dashboard_url','type' => NULL,'created_at' => '2021-04-06 21:07:41','updated_at' => '2021-06-07 00:34:36'),
      array('id' => '43','trigger' =>'quote-request','role_id' => '5','name' => 'New Customer Quote Request','slug' => 'admin creates a quote for a lead form','body' => '@admin_company has responded to your quote request.
        To see their response, log into your Eclipse account:
        @dashboard_url','type' => NULL,'created_at' => '2021-04-06 21:12:27','updated_at' => '2021-06-07 00:32:58'),

      array('id' => '44','trigger' =>'pending-provider-chat','role_id' => '1','name' => 'Pending Provider Chat Waiting in Eclipse','slug' => 'Pending Provider Chat Waiting in Eclipse','body' => '@provider has sent you a message through the Eclipse portal
        @chat_from_provider
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 03:00:24','updated_at' => '2021-06-07 00:36:32'),

      array('id' => '45','trigger'=>'pending-admin-chat', 'role_id' => '2','name' => 'Pending Admin Chat Waiting in Eclipse','slug' => 'Pending Admin Chat Waiting in Eclipse','body' => '@admin  has sent you a message through the Eclipse portal:
        @chat_from_admin
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 03:04:23','updated_at' => '2021-06-07 00:37:26'),
      array('id' => '46','trigger'=>'pending-customer-chat', 'role_id' => '1','name' => 'Pending customer Chat Waiting in Eclipse','slug' => 'Pending customer Chat Waiting in Eclipse','body' => '@consumer  has sent you a message through the Eclipse portal.
        @chat_from_customer
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 03:19:32','updated_at' => '2021-06-07 00:38:55'),

      array('id' => '47','trigger'=>'application-submit', 'role_id' => '1','name' => 'New Provider Application (submitted/received)','slug' => 'applicant submits an application','body' => '@application_name has submitted a new provider application.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 03:25:21','updated_at' => '2021-06-07 01:56:06'),
      array('id' => '48','trigger'=>'application-submit','role_id' => '2','name' => 'New Provider Application (submitted/received)','slug' => 'A provider submits an application','body' => 'Thank you for submitting your application for @admin_company.
        We have received your documents and will be in touch soon.','type' => NULL,'created_at' => '2021-04-07 03:27:41','updated_at' => '2021-06-07 01:56:37'),

      array('id' => '49','trigger'=>'screening-invitation','role_id' => '2','name' => 'New Provider Screening Invitation','slug' => 'When admin approves an application','body' => '@admin_company has reviewed your application and is inviting you to screen.
        Please follow the link below to complete the screening.
        @screening_link
        Note: Screenings are best done in a quiet area and with a device that has a strong internet connection and webcam and microphone capabilities.','type' => NULL,'created_at' => '2021-04-07 03:32:29','updated_at' => '2021-06-07 01:57:44'),

      array('id' => '50','trigger'=>'provider-screening','role_id' => '1','name' => 'New Provider Screening','slug' => 'applicant completes a screening','body' => '@provider has completed their screening.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 03:53:34','updated_at' => '2021-06-07 01:58:17'),

      array('id' => '51','trigger'=>'application-accepted','role_id' => '2','name' => 'Provider Application Accepted','slug' => 'Admin approves applicant and converts to provider','body' => 'Congratulations! @admin_company has invited you to join our team!
        You will receive a \'Welcome\' email shortly.','type' => NULL,'created_at' => '2021-04-07 04:00:09','updated_at' => '2021-06-07 02:01:20'),

      array('id' => '52','trigger'=>'application-denied','role_id' => '2','name' => 'Provider Application Denied','slug' => 'Admin denies a provider application or screening','body' => 'Thank you for your time and interest in joining @admin_company.
        We regret to inform you that we are unable to add you to the team at this time.
        We wish you the best and will be in touch if anything changes.','type' => NULL,'created_at' => '2021-04-07 04:05:59','updated_at' => '2021-06-07 02:03:24'),

      array('id' => '53','trigger'=>'invoice-issued','role_id' => '3','name' => 'New Invoice Issued','slug' => 'Admin or system creates a new customer invoice','body' => '@admin_company has issued you a new invoice:
        Invoice Name: @invoice_name
        Invoice Issue Date: @invoice_issue_date
        Invoice Due Date: @invoice_due_date
        Invoice Total: @invoice_total
        To review the invoice and submit a payment, log into your @admin_company portal.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 04:12:37','updated_at' => '2021-06-07 02:04:38'),

      array('id' => '54','trigger'=>'invoice-reminder','role_id' => '5','name' => 'Pending Invoice Reminder','slug' => 'Send every 7-days after the invoice is issued to customer','body' => 'You have one or more invoice(s) due for payment:
        Invoice Name: @invoice_name
        Invoice Issue Date: @invoice_issue_date
        Invoice Due Date: @invoice_due_date
        Invoice Total: @invoice_total
        To review the invoice and submit a payment, log into your @admin_company portal.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 04:17:44','updated_at' => '2021-06-07 02:05:20'),

      array('id' => '55','trigger'=>'invoice-overdue','role_id' => '5','name' => 'Overdue Invoice','slug' => 'customer has an invoice status change to "overdue"','body' => 'You have one or more overdue invoice(s) with @admin_company:
        Invoice Name: @invoice_name
        Invoice Issue Date: @invoice_issue_date
        Invoice Due Date: @invoice_due_date
        Invoice Total: @invoice_total
        To review the invoice and submit a payment, log into your @admin_company portal.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 04:19:26','updated_at' => '2021-06-07 02:07:00'),

      array('id' => '56','trigger'=>'payment-received','role_id' => '1','name' => 'Payment Received','slug' => 'customer submits payment','body' => '@consumer has submitted payment:
        Invoice Name: @invoice_name
        Invoice Total: @invoice_total
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 04:24:03','updated_at' => '2021-06-07 02:08:35'),

      array('id' => '57','trigger'=>'refund-issued','role_id' => '5','name' => 'Refund Issued','slug' => 'admin issues customer a refund','body' => '@admin_company has issued you a refund:
        Amount: @booking_payment
        Method: @payment_method
        Your refund will be returned to the original payment method or added as credit to your account.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 04:29:25','updated_at' => '2021-06-07 02:09:40'),
      array('id' => '58', 'trigger'=>'customer-receipt','role_id' => '3','name' => 'Customer Receipt','slug' => 'customer makes a payment','body' => 'Thank you for your recent payment. Your receipt is ready!
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 04:31:12','updated_at' => '2021-06-07 02:10:37'),

      array('id' => '59','trigger'=>'reimbursement-request','role_id' => '1','name' => 'Provider Reimbursement Request','slug' => 'provider requests a reimbursement','body' => '@provider  has requested a reimbursement for the following assignment:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        Reimbursement Amount: @reimbursement_amount
        Reimbursement Reason: @reimbursement_reason
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 04:46:41','updated_at' => '2021-06-07 02:11:46'),
      array('id' => '60','trigger'=>'reimbursement-request','role_id' => '2','name' => 'Provider Reimbursement Request','slug' => 'provider requests a reimbursement','body' => '@admin_company has received your reimbursement request for the following assignment:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        Reimbursement Amount: @reimbursement_amount
        Reimbursement Reason: @reimbursement_reason
        We will be in touch soon if we require anything further.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 04:49:46','updated_at' => '2021-06-07 02:12:37'),

      array('id' => '61','trigger'=>'reimbursement-request-approved','role_id' => '2','name' => 'Provider Reimbursement Request Approved','slug' => 'admin approves a provider\'s reimbursement request','body' => '@admin_company has approved your reimbursement request for the following assignment:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        Reimbursement Amount: @reimbursement_amount
        Reimbursement Reason: @reimbursement_reason
        The reimbursement will be added to your payroll.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 04:51:57','updated_at' => '2021-06-07 02:13:53'),

      array('id' => '62','trigger'=>'reimbursement-request-declined','role_id' => '2','name' => 'Provider Reimbursement Request Declined','slug' => 'admin denies provider\'s request for reimbursement','body' => '@admin_company has denied your reimbursement request for the following assignment:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        Reimbursement Amount: @reimbursement_amount
        Reimbursement Reason: @reimbursement_reason','type' => NULL,'created_at' => '2021-04-07 04:53:24','updated_at' => '2021-06-07 02:14:46'),

      array('id' => '63','trigger'=>'payment-issued','role_id' => '2','name' => 'Provider Payment Issued','slug' => 'admin issues a payment to provider','body' => '@admin_company has issued you a payment:
        Remittance Number: @remittance_number
        Remittance Total: @remittance_total_amount
        Payment Method: @remittance_payment_method
        To review your payment, log into your Eclipse portal.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 06:01:54','updated_at' => '2021-06-07 02:24:59'),

      array('id' => '64','trigger'=>'remittance-issued','role_id' => '2','name' => 'Remittance Issued','slug' => 'admin issues a new remittance for a provider','body' => '@admin_company has issued you a new remittance:
        Remittance Total: @remittance_total_amount
        Scheduled Payment Date: @payment_scheduled_date
        To review your remittance, log into your Eclipse portal.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 06:04:35','updated_at' => '2021-06-07 02:22:20'),

      array('id' => '65','trigger'=>'welcome-email','role_id' => '1','name' => 'New Account Weclome Email','slug' => 'new account setup','body' => 'You\'ve received access to @admin_company Eclipse scheduling portal. As part of your account, you have been enrolled in SMS notifications for updates to your schedule and billing. To limit which notifications you receive, log into your portal and go to "Settings" then "Notifications."  @dashboard_url','type' => NULL,'created_at' => '2021-04-07 06:12:23','updated_at' => '2021-06-07 02:26:30'),
      array('id' => '66','trigger'=>'welcome-email','role_id' => '2','name' => 'New Account Weclome Email','slug' => 'new account setup','body' => 'You\'ve received access to @admin_company\'s Eclipse scheduling portal. As part of your account, you have been enrolled in SMS notifications for updates to your schedule and payroll.
        To limit which notifications you receive, log into your portal and go to "Settings" then "Notifications."
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 06:14:48','updated_at' => '2021-06-07 02:27:45'),
      array('id' => '67','trigger'=>'welcome-email','role_id' => '5','name' => 'New Account Weclome Email','slug' => 'new account setup','body' => 'You\'ve received access to @admin_company\'s Eclipse scheduling portal. As part of your account, you have been enrolled in SMS notifications for updates to your schedule and payroll.
        To limit which notifications you receive, log into your portal and go to "Settings" then "Notifications."
        @dashboard_url','type' => NULL,'created_at' => '2021-04-07 06:16:30','updated_at' => '2021-06-07 02:28:02'),

      array('id' => '68','trigger'=>'customer-request-question','role_id' => '5','name' => 'Question About Customer Request','slug' => 'Admin clicks "Ask Customer" button in "Assignment Details"--> opens window prompt for admin to type a question  Send to: Send to user who created the booking (consumer/staff) and their associated supervisor','body' => '@admin_company has a question about your service request:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @chat_from_admin
        To reply, simply respond to this text or log into your Eclipse portal: @dashboard_url','type' => NULL,'created_at' => '2021-04-07 06:17:35','updated_at' => '2021-06-07 02:48:38'),
      array('id' => '69','trigger'=>'password-reset','role_id' => '1','name' => 'Account Password Reset','slug' => 'user requests a password reset','body' => 'You\'ve requested to reset the password for your Eclipse scheduling portal. You will receive a reset link by email shortly. If you did not request this password change, please reply "ALERT" to notify a coordinator immediately.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-09 00:58:52','updated_at' => '2021-06-07 03:20:12'),
      array('id' => '70','trigger'=>'password-reset','role_id' => '2','name' => 'Account Password Reset','slug' => 'user requests a password reset','body' => 'You\'ve requested to reset the password for your [admin company] scheduling portal. You will receive a reset link by email shortly. If you did not request this password change, please notify a coordinator immediately.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-09 01:01:19','updated_at' => '2021-06-07 03:21:47'),
      array('id' => '71','trigger'=>'password-reset','role_id' => '5','name' => 'Account Password Reset','slug' => 'user requests a password reset','body' => 'You\'ve requested to reset the password for your [admin company] scheduling portal. You will receive a reset link by email shortly. If you did not request this password change, please notify a coordinator immediately.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-09 01:02:01','updated_at' => '2021-06-07 03:21:22'),

      array('id' => '72','trigger'=>'suspicious-activity','role_id' => '1','name' => 'Suspicious Account Activity','slug' => 'sends when a user clicks "Report suspicious activity" in an email, sms, or in their portal   action- if user replies "LOCK," it should lock the account that reported suspicious activity','body' => '@username has reported suspicious activity in their Eclipse account:

                Date: @date
                Time: @time
                @dashboard_url','type' => NULL,'created_at' => '2021-04-09 01:09:06','updated_at' => '2021-06-07 03:22:55'),

      array('id' => '73','trigger'=>'account-lock-notification','role_id' => '1','name' => 'Account Lock-out Notification','slug' => 'send when a user is locked out of their account  action- if user sends "UNLOCK," the system should unlock the account that was previously locked','body' => '@username  has been locked out of their Eclipse account:

                [Show what triggered the lock-out (ex: too many login attempts; user reported suspicious activity)]


                @dashboard_url','type' => NULL,'created_at' => '2021-04-09 02:37:08','updated_at' => '2021-06-07 03:23:35'),
      array('id' => '74','trigger'=>'account-lock-notification','role_id' => '2','name' => 'Account Lock-out Notification','slug' => 'send when provider is locked out of their account  actions- "ALERT" triggers "suspicious activity reported\' notification to admin for associated user','body' => 'You have been locked out of your @admin_company account:

                [Show what triggered the lock-out (ex: too many login attempts; user reported suspicious activity)]


         To unlock your account, contact a @admin_company coordinator.','type' => NULL,'created_at' => '2021-04-09 02:39:52','updated_at' => '2021-06-07 03:24:01'),
      array('id' => '75','trigger'=>'account-lock-notification','role_id' => '5','name' => 'Account Lock-out Notification','slug' => 'send when provider is locked out of their account  actions- "ALERT" triggers "suspicious activity reported\' notification to admin for associated user','body' => 'You have been locked out of your @admin_company account:

                [Show what triggered the lock-out (ex: too many login attempts; user reported suspicious activity)]


         To unlock your account, contact a @admin_company coordinator.','type' => NULL,'created_at' => '2021-04-09 02:41:11','updated_at' => '2021-06-07 03:24:21'),

      array('id' => '76','trigger'=>'referral-credit-thank-email','role_id' => '2','name' => 'Referral- Thank you email + credit','slug' => 'Sends 24-hours after a booking that has a provider\'s referral code','body' => 'Thank you for recommending @admin_company to others!
        As part of our appreciation, a credit for @credit_amount will be added to your payroll.
        Keep spreading the word!
        @dashboard_url','type' => NULL,'created_at' => '2021-04-09 02:44:46','updated_at' => '2021-06-07 03:30:38'),
      array('id' => '77','trigger'=>'referral-credit-thank-email','role_id' => '5','name' => 'Referral- Thank you email + credit','slug' => 'Sends 24-hours after a booking that has a customer\'s referral code','body' => 'Thank you for recommending @admin_company to others!
        As part of our appreciation, a credit for @credit_amount has been added to your account.
        Keep spreading the word!
        @dashboard_url','type' => NULL,'created_at' => '2021-04-09 02:46:45','updated_at' => '2021-06-07 03:31:12'),

      array('id' => '78','trigger'=>'feedback-email','role_id' => '2','name' => 'Feedback Request Email','slug' => 'Sends 1-hour after a booking if admin selected   Action: whatever the provider responds should be saved as their feedback note (admin-facing only)','body' => 'Thank you for your recent services:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location

                In order to help us improve services for this customer in the future, you are invited to share any feedback. Submit your feedback by responding to this email or by logging into you @admin_company portal.

                @dashboard_url','type' => NULL,'created_at' => '2021-04-09 02:52:58','updated_at' => '2021-06-07 03:49:09'),
      array('id' => '79','trigger'=>'feedback-email','role_id' => '5','name' => 'Feedback Request Email','slug' => 'Sends 1-hour after a booking if admin selected   Action: whatever the customer responds should be saved as their feedback note (admin-facing only)','body' => 'We hope you had a positive service experience today:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location

                In order to help us to improve our services, you are invited to share any feedback you have.

                To share your feedback, simply reply to this text or log into your @admin_company portal.

                @dashboard_url','type' => NULL,'created_at' => '2021-04-09 02:55:00','updated_at' => '2021-06-07 03:49:34'),

      array('id' => '80','trigger'=>'document-upload', 'role_id' => '1','name' => 'Document Uploaded to Drive','slug' => 'a user uploads a document to their account','body' => '@username has uploaded a new document to their drive:
        Document Name: @document_name
        Document Category: @document_category
        @dashboard_url','type' => NULL,'created_at' => '2021-04-09 02:58:13','updated_at' => '2021-06-07 03:50:32'),

      array('id' => '81','trigger'=>'otp-email','role_id' => '1','name' => 'OTP Email','slug' => 'OTP request','body' => 'You\'ve requested a One-time Passcode (OTP) to log into your Eclipse scheduling portal. This OTP will expire in 15-minutes.
        @otp
        **Warning: Do not share this OTP with anyone. Reply "ALERT" if you did not request this passcode**
        To access your Eclipse portal, enter the above OTP in the log-in prompt that follows your password submission.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-09 03:09:17','updated_at' => '2021-06-07 04:07:24'),
      array('id' => '82','trigger'=>'otp-email','role_id' => '2','name' => 'OTP Email','slug' => 'OTP request  Action: "ALERT" should trigger "suspicious activity" notifications','body' => 'You\'ve requested a One-time Passcode (OTP) to log into your Eclipse scheduling portal. This OTP will expire in 15-minutes.
        @otp
        **Warning: Do not share this OTP with anyone. Reply "ALERT" if you did not request this passcode**
        To access your Eclipse portal, enter the above OTP in the log-in prompt that follows your password submission.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-09 03:09:46','updated_at' => '2021-06-07 04:08:12'),
      array('id' => '83','trigger'=>'otp-email','role_id' => '5','name' => 'OTP Email','slug' => 'OTP request  Action: "ALERT" should trigger "suspicious activity" notifications','body' => 'You\'ve requested a One-time Passcode (OTP) to log into your Eclipse scheduling portal. This OTP will expire in 15-minutes.
        @otp
        **Warning: Do not share this OTP with anyone. Reply "ALERT" if you did not request this passcode**
        To access your Eclipse portal, enter the above OTP in the log-in prompt that follows your password submission.
        @dashboard_url','type' => NULL,'created_at' => '2021-04-09 03:10:09','updated_at' => '2021-06-07 04:08:50'),

      array('id' => '84','trigger'=>'missing-timesheet','role_id' => '2','name' => 'Missing Timesheet','slug' => '24-hours after a booking ends for any assignment that has a timesheet requirement that has not been satisfied','body' => 'Thank you for your recent services:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        Please upload this assignment timesheet at your earliest convenience. This assignment will be processed for payment only after a timesheet has been submitted. Thank you!','type' => NULL,'created_at' => '2021-04-09 03:12:35','updated_at' => '2021-06-07 04:09:38'),

      array('id' => '85','trigger'=>'assignment-endTime-updated','role_id' => '1','name' => 'Assignment End-time Updated','slug' => 'Assignment End-time Updated','body' => 'no content','type' => NULL,'created_at' => '2021-04-09 03:15:00','updated_at' => '2021-06-07 04:17:13'),
      array('id' => '86','trigger'=>'assignment-endTime-updated','role_id' => '2','name' => 'Assignment End-time Updated','slug' => 'Provider\'s completed assignment end-time is updated','body' => 'no content','type' => NULL,'created_at' => '2021-04-09 03:16:45','updated_at' => '2021-06-07 04:17:37'),
      array('id' => '87','trigger'=>'assignment-endTime-updated','role_id' => '5','name' => 'Assignment End-time Updated','slug' => 'admin, provider, or customer updates a booking\'s actual end-time','body' => 'no content','type' => NULL,'created_at' => '2021-04-09 03:20:04','updated_at' => '2021-06-07 04:18:15'),

      array('id' => '88','trigger'=>'credential-warning','role_id' => '2','name' => 'Expiring Credentials Warning','slug' => 'Provider\'s credentials are about to expire. Should send 30-days, 15-days, 7-days and 1-day before expiration','body' => 'One of your credential documents is set to expire soon:
        Document Name: @document_name
                Document Expiry Date: @document_expiry_date

                To upload your updated credentials to My Drive, log into your Eclipse portal.','type' => NULL,'created_at' => '2021-04-09 03:23:16','updated_at' => '2021-06-07 04:20:03'),

      array('id' => '89','trigger'=>'credential-alert', 'role_id' => '2','name' => 'Expired Credentials Alert','slug' => 'Provider document has expried.  Should send every 7-days until a new document is uploaded.','body' => 'One of your credential documents has expired:

                Document Name: @document_name
                Document Expiry Date: @document_expiry_date

                To upload your updated credentials to My Drive, log into your Eclipse portal.','type' => NULL,'created_at' => '2021-04-09 03:24:37','updated_at' => '2021-06-07 04:20:26'),

      array('id' => '90','trigger'=>'assignment-reminder-48HR', 'role_id' => '1','name' => 'Upcoming Assignment Reminder (48-hours)','slug' => 'Send nightly to admin with a list of all appointments scheduled within the next 48-hours  Settings: User can turn on or off in notification settings','body' => 'Here is your recap of scheduled assignments for the next 48-hours.
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => '2021-05-10 05:44:58','updated_at' => '2021-06-07 04:24:20'),
      array('id' => '91','trigger'=>'assignment-reminder-48HR','role_id' => '2','name' => 'Upcoming Assignment Reminder (48-hours)','slug' => 'Send nightly to providers with a list of all appointments scheduled within the next 48-hours  Settings: User can turn on or off in notification settings','body' => 'Here is a recap of your scheduled assignments with @admin_company for the next 48-hours:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => '2021-05-10 05:46:51','updated_at' => '2021-06-07 04:24:01'),
      array('id' => '92','trigger'=>'assignment-reminder-48HR','role_id' => '5','name' => 'Upcoming Assignment Reminder (48-hours)','slug' => 'Send nightly to customer with a list of all appointments scheduled within the next 48-hours  Settings: User can turn on or off in notification settings','body' => 'Here is a recap of your scheduled service requests with @admin_company for the next 48-hours:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => '2021-05-10 05:48:37','updated_at' => '2021-06-07 04:23:33'),

      array('id' => '93','trigger'=>'assignment-reminder-24HR','role_id' => '1','name' => 'Upcoming Assignment Reminder (24-hours)','slug' => 'Send nightly to admin with a list of all appointments scheduled within the next 24-hours  Settings: User can turn on or off in notification settings','body' => 'Here is your recap of scheduled assignments for the next 24-hours.
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => '2021-05-10 05:50:24','updated_at' => '2021-06-06 23:29:06'),
      array('id' => '94','trigger'=>'assignment-reminder-24HR','role_id' => '2','name' => 'Upcoming Assignment Reminder (24-hours)','slug' => 'Send nightly to providers with a list of all appointments scheduled within the next 24-hours  Settings: User can turn on or off in notification settings','body' => 'Here is a recap of your scheduled assignments with @admin_company for the next 24-hours:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => '2021-05-10 05:51:54','updated_at' => '2021-06-06 23:29:54'),
      array('id' => '95','trigger'=>'assignment-reminder-24HR','role_id' => '5','name' => 'Upcoming Assignment Reminder (24-hours)','slug' => 'Send nightly to customer with a list of all appointments scheduled within the next 24-hours  Settings: User can turn on or off in notification settings','body' => 'Here is a recap of your scheduled service requests with @admin_company for the next 24-hours:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => '2021-05-10 05:53:11','updated_at' => '2021-06-06 23:32:07'),

      array('id' => '96','trigger'=>'unassigned-booking-available','role_id' => '2','name' => 'Unassigned Booking(s) Available','slug' => 'send nightly to providers whose profiles match bookings (accommodation/service/specialization/availability) with status "unassigned"','body' => 'Are you available for any of these service requests:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => '2021-05-10 06:01:17','updated_at' => '2021-06-06 23:43:07'),

      array('id' => '97','trigger'=>'assignment-returned','role_id' => '1','name' => 'Provider Assignment Returned','slug' => 'a provider returns an assignment on their schedule','body' => '@provider has returned the following assignment:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => '2021-05-10 06:22:18','updated_at' => '2021-06-06 23:55:25'),
      array('id' => '98','trigger'=>'assignment-returned','role_id' => '2','name' => 'Provider Assignment Returned','slug' => 'a provider returns an assignment on their schedule','body' => 'As per your request, you have been unscheduled for the following assignment:
        Number: @booking_number
        Start Time: @booking_start_at
        End Time: @booking_end_at
        Duration: @booking_duration
        Location: @booking_location
        @dashboard_url','type' => NULL,'created_at' => '2021-05-10 06:24:48','updated_at' => '2021-06-06 23:56:44'),

      array('id' => '101','trigger'=>'pending-admin-chat','role_id' => '5','name' => 'Pending Admin Chat Waiting in Eclipse','slug' => 'admin messages customer while they are logged out of their account','body' => '@admin  has sent you a message through the Eclipse portal.
        @chat_from_admin
        @dashboard_url','type' => NULL,'created_at' => '2021-05-10 06:54:56','updated_at' => '2021-06-07 00:45:22'),

      array('id' => '104','trigger'=>'provider-screening','role_id' => '2','name' => 'New Provider Screening','slug' => 'A provider completes a screening','body' => 'Thank you for completing your screening with @admin_company.
        We have received your recordings and will be in touch soon.','type' => NULL,'created_at' => '2021-05-10 22:00:52','updated_at' => '2021-06-07 02:00:33'),

      array('id' => '105','trigger'=>'assignment-scheduled','role_id' => '1','name' => 'New Assignment Scheduled','slug' => 'New booking added by customer (not by admin)','body' => '@consumer has submitted a new request for services!
      Start Time: @booking_start_at
      End Time: @booking_end_at
      Duration: @booking_duration
      Location: @booking_location @dashboard_url',
      'type' => NULL,'created_at' => '2021-05-11 05:53:59','updated_at' => '2021-05-11 05:53:59'),

      array('id' => '106','trigger'=>'assignment-scheduled','role_id' => '2','name' => 'New Assignment Schedule','slug' => 'New booking added to provider schedule','body' => '@admin_company has added a new assignment to your schedule:Start Time: @booking_start_atEnd Time: @booking_end_atDuration: @booking_durationLocation: @booking_location @dashboard_url','type' => NULL,'created_at' => '2021-05-11 05:55:22','updated_at' => '2021-05-11 05:55:22'),

     array('id' => '107','trigger'=>'update-payment-preferences','role_id' => '1','name' => 'Updated Provider Payment Preferences','slug' => 'provider makes a change to their payment preference tab or uploads a new document to the tab','body' => '@provider has updated their preferred payment preferences.
    To view, log into your Eclipse portal and go to the provider`s "Payment Preferences" tab.
    @dashboard_url','type' => NULL,'created_at' => '2021-06-14 01:33:22','updated_at' => '2021-06-14 01:50:10'),

    array('id' => '108','trigger'=>'customer-approved-quote','role_id' => '1','name' => 'Customer has approved your service request','slug' => 'someone submits a lead form','body' => '@consumer has approved a request for services.
       @dashboard_url','type' => NULL,'created_at' => '2021-04-06 21:07:41','updated_at' => '2021-06-07 00:34:36'),

   array('id' => '109','trigger'=>'customer-denied-quote','role_id' => '1','name' => 'Customer has denied your service request','slug' => 'someone submits a lead form','body' => '@consumer has denied a request for services.
       @dashboard_url','type' => NULL,'created_at' => '2021-04-06 21:07:41','updated_at' => '2021-06-07 00:34:36'),
    );

    foreach ($sms_templates as $template) {
      DB::table('sms_templates')->insert($template);
    }
  }
}
