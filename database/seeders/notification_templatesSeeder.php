<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class notification_templatesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function __construct()
  {
    DB::table('notification_templates')->truncate();
  }

  public function run()
  {
    $notification_templates = array(
      array('id' => '1','trigger'=>'assignment-scheduled','role_id' => '1','name' => 'New Assignment Schedule','slug' => 'New booking added by customer (not by admin)','redirect_to' => '@booking_detail','body' => '@consumer  has submitted a new request for services! ( @booking_number )'),
      array('id' => '2','trigger'=>'assignment-scheduled','role_id' => '2','name' => 'New Assignment Schedule','slug' => 'New booking added to provider schedule','redirect_to' => '@booking_detail','body' => '@admin_company  has added a new assignment to your schedule: ( @booking_number )'),
      array('id' => '3','trigger'=>'assignment-scheduled','role_id' => '5','name' => 'New Assignment Schedule','slug' => 'New booking added to customer schedule','redirect_to' => '@booking_detail','body' => '@admin_company  has scheduled your service request: ( @booking_number )'),

      array('id' => '4','trigger'=>'new-assignment-referral','role_id' => '1','name' => 'New Assignment via Referral','slug' => 'referral code redeemed','redirect_to' => '@booking_detail','body' => 'Congratulations, you received a new referral! [Customer] has submitted their first service request! ( @booking_number )'),

      array('id' => '5','trigger'=>'assignment-modified','role_id' => '1','name' => 'Assignment Modified','slug' => 'Customer modifies a booking (not admin)','redirect_to' => '@booking_detail','body' => '@admin_company  has modified your upcoming assignment: ( @customer_company , @booking_number )'),
      array('id' => '6','trigger'=>'assignment-modified','role_id' => '2','name' => 'Assignment Modified','slug' => 'Provider`s assignment is modified by admin or customer','redirect_to' => '@booking_detail','body' => '@admin_company has modified your upcoming assignment: ( @booking_number , @booking_start_at  )'),
      array('id' => '7','trigger'=>'assignment-modified','role_id' => '5','name' => 'Assignment Modified','slug' => 'admin or customer modifies the customer`s request','redirect_to' => '@booking_detail','body' => '@admin_company has modified your upcoming service request: ( @booking_number , @booking_start_at  )'),

      array('id' => '8','trigger'=>'assignment-modified-request','role_id' => '1','name' => 'Assignment Modification Requested','slug' => 'Customer requests modification to step 1 within cancellation parameters. If approved, reschedule the assignment according the the requested modifications and issue the associated notifications. If denied, leave assignment as it is.','redirect_to' => '@booking_detail','body' => '@consumer has requested a change to their upcoming service details: ( @consumer, @booking_number )'),
      array('id' => '9','trigger'=>'assignment-modified-request','role_id' => '5','name' => 'Assignment Modification Requested','slug' => 'Customer requests modification to step 1 within cancellation parameters','redirect_to' => '@booking_detail','body' => 'You have requested a change to an upcoming service request: ( @booking_number ) Because you requested this change outside the allotted time frame, @admin_company  will need to approve your modifications. You will receive a follow-up notification shortly.'),

      array('id' => '10','trigger'=>'assignment-modified-denied','role_id' => '5','name' => 'Assignment Modification Denied','slug' => 'Admin denies a modification to step 1 of a service request','redirect_to' => '@booking_detail','body' => 'You recently requested to modify your service request: ( @booking_number ) Unfortunately, @admin_company  is unable to accommodate these modifications so close to your service start time. In order to change your services, you will need to cancel or reschedule your request. We apologize for any inconvenience.'),

      array('id' => '11','trigger'=>'submit-request','role_id' => '1','name' => 'Consumer or Staff has Submitted a Service Request','slug' => 'New booking added by customer (not by admin) requires supervisor approval before being scheduled/confirmed','redirect_to' => '@booking_detail','body' => '@consumer  has submitted a new service request requiring supervisor approval: ( @booking_number , @booking_date )'),
      array('id' => '12','trigger'=>'submit-request','role_id' => '3','name' => 'Consumer or Staff has Submitted a Service Request','slug' => 'Consumer or staff member submits a service request','redirect_to' => '@pending_review','body' => '@consumer has submitted a new service request requiring your approval: ( @booking_number, @booking_start_at  )'),

      array('id' => '13','trigger'=>'approved-request','role_id' => '1','name' => 'Supervisor has approved your service request','slug' => 'A supervisor approves a booking added by a consumer or staff member.','redirect_to' => '@booking_detail','body' => '@supervisor  has approved a new service request for @customer_company  ( @booking_number , @booking_start_at  )'),
      array('id' => '14','trigger'=>'approved-request','role_id' => '5','name' => 'Supervisor has approved your service request','slug' => 'A supervisor approves a booking added by a consumer or staff member.','redirect_to' => '@booking_detail','body' => '@supervisor has approved your service request: ( @booking_number , @booking_start_at  )'),

      array('id' => '15','trigger'=>'denied-request','role_id' => '1','name' => 'Supervisor has denied your service request','slug' => 'A supervisor denied a booking added by a consumer or staff member.','redirect_to' => '@booking_detail','body' => '@supervisor  has denied the following service request for @customer_company : ( @booking_number, @booking_date, @booking_start_at  )'),
      array('id' => '16','trigger'=>'denied-request','role_id' => '5','name' => 'Supervisor has denied your service request','slug' => 'A supervisor denied a booking added by a consumer or staff member.','redirect_to' => '@booking_detail','body' => '@supervisor  has denied the following service request: ( @booking_number, @booking_date, @booking_start_at  )'),

      array('id' => '17','trigger'=>'assignment-rescheduled','role_id' => '1','name' => 'Assignment Rescheduled','slug' => 'Customer reschedules a booking (not admin)','redirect_to' => '@booking_detail','body' => 'An upcoming assignment has been rescheduled: ( @booking_number, @booking_date, @booking_start_at  )'),
      array('id' => '18','trigger'=>'assignment-rescheduled','role_id' => '2','name' => 'Assignment Rescheduled','slug' => 'Appointment on provider`s schedule mofidied','redirect_to' => '@booking_detail','body' => 'Your upcoming assignment has been rescheduled: ( @booking_number, @booking_date, @booking_start_at  )'),
      array('id' => '19','trigger'=>'assignment-rescheduled','role_id' => '5','name' => 'Assignment Rescheduled','slug' => 'Appointment on customer`s schedule is rescheduled','redirect_to' => '@booking_detail','body' => 'Your upcoming service request has been rescheduled: ( @booking_number, @booking_date, @booking_start_at  )'),

      array('id' => '20','trigger'=>'assignment-rescheduled-request','role_id' => '1','name' => 'Assignment Reschedule Request','slug' => 'Customer requests to reschedule a booking within cancellation parameters','redirect_to' => '@booking_detail','body' => '@consumer  has requested to reschedule their upcoming services within cancellation notice: ( @booking_number, @booking_date, @booking_start_at  )'),
      array('id' => '21','trigger'=>'assignment-rescheduled-request','role_id' => '5','name' => 'Assignment Reschedule Request','slug' => 'Customer requests to reschedule a booking within cancellation parameters','redirect_to' => '@booking_detail','body' => 'You have requested to reschedule an upcoming service request: ( @booking_number, @booking_date, @booking_start_at  )'),

      array('id' => '22','trigger'=>'assignment-rescheduled-request-denied','role_id' => '5','name' => 'Assignment Reschedule Request Denied','slug' => 'Admin denies a customer`s reschedule request','redirect_to' => '@booking_detail','body' => 'You recently requested to reschedule your upcoming service request: ( @booking_number, @booking_date, @booking_start_at  )'),

      array('id' => '23','trigger'=>'assignment-cancelled','role_id' => '1','name' => 'Assignment Cancelled','slug' => 'A customer cancels an assignment (not admin). Triggers if the cancellation was inside and outside cancellation parameters.','redirect_to' => '@booking_detail','body' => '@consumer  has cancelled their upcoming services: ( @booking_number, @booking_date, @booking_start_at  )'),
      array('id' => '24','trigger'=>'assignment-cancelled','role_id' => '2','name' => 'Assignment Cancelled','slug' => 'Provider scheduled appointment is cancelled.','redirect_to' => '@booking_detail','body' => 'Your upcoming assignment with @admin_company  has been cancelled: ( @booking_number, @booking_date, @booking_start_at  )'),
      array('id' => '25','trigger'=>'assignment-cancelled','role_id' => '5','name' => 'Assignment Cancelled','slug' => 'Customer`s scheduled appointment is cancelled.','redirect_to' => '@booking_detail','body' => 'Your upcoming service request with @admin_company  has been cancelled: ( @booking_number, @booking_date, @booking_start_at  )'),

      array('id' => '26','trigger'=>'payment-decline-notice','role_id' => '1','name' => 'Payment Declined Notice','slug' => 'Customer credit card declined when hold is triggered','redirect_to' => NULL,'body' => '@consumer\'s credit card was declined for payment.'),
      array('id' => '27','trigger'=>'payment-decline-notice','role_id' => '5','name' => 'Payment Declined Notice','slug' => 'Customer credit card declined when hold is triggered','redirect_to' => NULL,'body' => 'Your credit card was declined for payment.'),

      array('id' => '28','trigger'=>'poor-provider-feedback','role_id' => '1','name' => 'Poor Provider Feedback Received','slug' => 'Customer submits feedback of 3 or less stars for a provider','redirect_to' => '@booking_detail','body' => '@provider received poor feedback from @consumer  after their assignment: ( @booking_number )'),

      array('id' => '29','trigger' =>'update-provider-assign-request','role_id' => '5','name' => 'Updated Request- Providers Assigned','slug' => 'admin assigns max providers to customer`s service request','redirect_to' => '@booking_detail','body' => '@admin_company has assigned providers to your upcoming service request: ( @booking_number, @booking_date, @booking_start_at  )'),

      array('id' => '30','trigger' =>'upcoming-assignment-reminder','role_id' => '1','name' => 'Upcoming Assignment Reminder (2-hours)','slug' => 'Send to admin within 2-hours of assignment start','redirect_to' => '@booking_detail','body' => 'You have a service request beginning in 2-hours: ( @booking_number, @consumer, @booking_start_at  )'),
      array('id' => '31','trigger' =>'upcoming-assignment-reminder','role_id' => '2','name' => 'Upcoming Assignment Reminder (2-hours)','slug' => 'Send to provider within 2-hours of assignment start','redirect_to' => '@booking_detail','body' => 'Your assignment with @admin_company  begins in 2-hours: ( @booking_number, @booking_location, @booking_start_at  )'),
      array('id' => '32','trigger' =>'upcoming-assignment-reminder','role_id' => '5','name' => 'Upcoming Assignment Reminder (2-hours)','slug' => 'Send to customer within 2-hours of assignment start','redirect_to' => '@booking_detail','body' => 'Your service request with @admin_company  begins in 2-hours: ( @booking_number, @booking_start_at   )'),

      array('id' => '33','trigger' =>'unassigned-booking-available','role_id' => '2','name' => 'Unassigned Booking(s) Available','slug' => 'send nightly to providers whose profiles match bookings','redirect_to' => '@booking_detail','body' => 'Are you available for any of these service requests: ( @booking_number, @booking_date, @booking_start_at  )'),

      array('id' => '34','trigger' =>'direct-assignment-request-invitation','role_id' => '2','name' => 'Direct Assignment Request (Invitation)','slug' => 'admin send invitation to provider','redirect_to' => '@booking_detail','body' => '@admin_company thinks you`d be a great match for this request: ( @booking_number, @booking_date, @booking_start_at  )'),

      array('id' => '35','trigger' =>'direct-assignment-request-reminder','role_id' => '2','name' => 'Direct Assignment Request Reminder','slug' => 'Send nightly to provider with list of all invitations  without reply','redirect_to' => '@booking_detail','body' => 'Don\'t forget, [Insert admin company] is awaiting your availability for the following request(s): ( @booking_number, @booking_date, @booking_start_at  )'),

      array('id' => '36','trigger' =>'assignment-acceptance-confirmation','role_id' => '1','name' => 'Assignment Acceptance/Confirmation','slug' => 'provider is assigned to an unassigned booking','redirect_to' => '@booking_detail','body' => '@provider has been confirmed for @consumer`s upcoming service request: ( @booking_number, @booking_date, @booking_start_at  )'),
      array('id' => '37','trigger' =>'assignment-acceptance-confirmation','role_id' => '2','name' => 'Assignment Acceptance/Confirmation','slug' => 'provider is assigned to an unassigned booking','redirect_to' => '@booking_detail','body' => '@admin_company has confirmed you for an upcoming assignment: ( @booking_number, @booking_date, @booking_start_at  )'),

      array('id' => '38','trigger'=>'assignment-surrender-request','role_id' => '1','name' => 'Provider Assignment Surrender Request','slug' => 'A provider has requested to return an assignment','redirect_to' => NULL,'body' => '@provider has requested to return the following assignment:'),

      array('id' => '39','trigger'=>'assignment-return-denied','role_id' => '2','name' => 'Provider Assignment Return Request Denied','slug' => 'Admin denies a provider\'s return request','redirect_to' => NULL,'body' => 'You recently requested to return the following assignment:'),

      array('id' => '40','trigger'=>'running-late', 'role_id' => '1','name' => 'Provider Running Late','slug' => 'A provider is running late to their assignment','redirect_to' => '@booking_detail','body' => '@provider has indicated they are running late to the following assignment: ( @booking_number,  @booking_start_at, @consumer   )'),
      array('id' => '41','trigger'=>'running-late', 'role_id' => '5','name' => 'Provider Running Late','slug' => 'A provider is running late to their assignment','redirect_to' => '@booking_detail','body' => 'We regret to report our providers will be delayed in arriving to your location: @assigned_providers'),

      array('id' => '42','trigger'=>'quote-request', 'role_id' => '1','name' => 'New Customer Quote Request','slug' => 'someone submits a lead form','redirect_to' => '@quote_details','body' => '@consumer has requested a quote for services.'),
      array('id' => '43','trigger'=>'quote-request', 'role_id' => '5','name' => 'New Customer Quote Request','slug' => 'admin creates a quote for a lead form','redirect_to' => '@quotes','body' => '@admin_company  has responded to your quote request'),

      array('id' => '44','trigger' =>'pending-provider-chat','role_id' => '1','name' => 'Pending Provider Chat Waiting in Eclipse','slug' => 'provider messages admin while they are logged out of their account','redirect_to' => '@messages','body' => '@provider has sent you a message through the Eclipse portal. @chat_from_provider'),

      array('id' => '45','trigger'=>'pending-admin-chat','role_id' => '2','name' => 'Pending Admin Chat Waiting in Eclipse','slug' => 'admin messages provider while they are logged out of their account','redirect_to' => '@messages','body' => '@admin has sent you a message through the Eclipse portal: @chat_from_admin'),
      array('id' => '46','trigger'=>'pending-admin-chat','role_id' => '5','name' => 'Pending admin Chat Waiting in Eclipse','slug' => 'admin messages customer while they are logged out of their account','redirect_to' => '@messages','body' => '@admin_company  has sent you a message through the Eclipse portal. @chat_from_admin'),

      array('id' => '47','trigger'=>'application-submit','role_id' => '1','name' => 'New Provider Application (submitted/received)','slug' => 'applicant submits an application','redirect_to' => '@applications','body' => '@application_name  has submitted an application.'),
      array('id' => '48','trigger'=>'application-submit','role_id' => '2','name' => 'New Provider Application (submitted/received)','slug' => 'A provider submits an application','redirect_to' => '@applications','body' => 'Thank you for submitting your application for @admin_company. We have received your documents and will be in touch soon.'),

      array('id' => '49','trigger'=>'screening-invitation','role_id' => '2','name' => 'New Provider Screening Invitation','slug' => 'When admin approves an application','redirect_to' => '@applications','body' => 'Thank you for completing your screening with @admin_company. We have received your recordings and will be in touch soon.'),

      array('id' => '50','trigger'=>'provider-screening', 'role_id' => '1','name' => 'New Provider Screening','slug' => 'New Provider Screening','redirect_to' => '@applications','body' => '@provider has completed a provider screening.'),

      array('id' => '51','trigger'=>'invoice-issued','role_id' => '3','name' => 'New Invoice Issued','slug' => 'Admin or system creates a new customer invoice','redirect_to' => '@invoices','body' => '@admin_company has issued you a new invoice: @invoice_name @invoice_due_date'),

      array('id' => '52','trigger'=>'pending-invoice-reminder','role_id' => '5','name' => 'Pending Invoice Reminder','slug' => 'Send every 7-days after the invoice is issued to customer','redirect_to' => '@invoices','body' => 'You have one or more invoice(s) due for payment:  @invoice_name @invoice_due_date'),

      array('id' => '53','trigger'=>'overdue-invoice','role_id' => '3','name' => 'Overdue Invoice','slug' => 'customer has an invoice status change to "overdue"','redirect_to' => '@invoices','body' => 'You have one or more overdue invoice(s) with @admin_company  @invoice_name @invoice_due_date'),

      array('id' => '54','trigger'=>'payment-received','role_id' => '1','name' => 'Payment Received','slug' => 'Customer payment received','redirect_to' => '@invoices','body' => '@consumer has submitted a payment: @invoice_total'),

      array('id' => '55','trigger'=>'refund-issued', 'role_id' => '3','name' => 'Refund Issued','slug' => 'Refund Issued','redirect_to' => '@invoices','body' => '@admin_company has issued you a refund: @refund_amount'),

      array('id' => '56','trigger'=>'customer-receipt', 'role_id' => '3','name' => 'Customer Receipt','slug' => 'Customer Receipt','redirect_to' => '@reciept_details','body' => 'Thank you for your recent payment. Your receipt is ready!'),

      array('id' => '57','trigger'=>'reimbursement-request','role_id' => '1','name' => 'Provider Reimbursement Request','slug' => 'Provider Reimbursement Request','redirect_to' => '@reimbursements','body' => '@provider has requested a reimbursement for the following assignment: ( @booking_number, @reimbursement_amount )'),
      array('id' => '58','trigger'=>'reimbursement-request','role_id' => '2','name' => 'Provider Reimbursement Request','slug' => 'Provider Reimbursement Request','redirect_to' => '@reimbursements','body' => '@admin_company has received your reimbursement request for the following assignment: ( @booking_number @reimbursement_amount )'),

      array('id' => '59','trigger'=>'reimbursement-request-approved', 'role_id' => '2','name' => 'Provider Reimbursement Request Approved','slug' => 'Provider Reimbursement Request Approved','redirect_to' => '@reimbursements','body' => '@admin_company has approved your reimbursement request for the following assignment:( @booking_number, @reimbursement_amount )'),

      array('id' => '60','trigger'=>'reimbursement-request-declined', 'role_id' => '2','name' => 'Provider Reimbursement Request Declined','slug' => 'Provider Reimbursement Request Declined','redirect_to' => '@reimbursements','body' => '@admin_company has denied your reimbursement request for the following assignment: ( @booking_number, @reimbursement_amount )'),

      array('id' => '61','trigger'=>'payment-issued', 'role_id' => '2','name' => 'Provider Payment Issued','slug' => 'Provider Payment Issued','redirect_to' => '@remittances','body' => '@admin_company  has issued you a payment: @remittance_total_amount'),

      array('id' => '62','trigger'=>'remittance-issued', 'role_id' => '2','name' => 'Remittance Issued','slug' => 'Remittance Issued','redirect_to' => '@remittances','body' => '@admin_company  has issued you a new remittance: @remittance_total_amount  @payment_scheduled_date'),

      array('id' => '63','trigger'=>'welcome-email', 'role_id' => '1','name' => 'New Account Weclome Email','slug' => 'New Account Weclome Email','redirect_to' => '@profile','body' => 'Welcome! you\'ve received access to @admin_company`s Eclipse scheduling portal. We suggest setting up your account profile and notification settings for an optimal user experience.'),
      array('id' => '64','trigger'=>'welcome-email', 'role_id' => '2','name' => 'New Account Weclome Email','slug' => 'New Account Weclome Email','redirect_to' => '@profile','body' => 'Welcome! You\'ve received access to@admin_company\'s Eclipse scheduling portal. We suggest setting up your account profile and notification settings for an optimal user experience.'),
      array('id' => '65','trigger'=>'welcome-email', 'role_id' => '5','name' => 'New Account Weclome Email','slug' => 'New Account Weclome Email','redirect_to' => '@profile','body' => 'Welcome!
    You\'ve received access to @admin_company \'s Eclipse scheduling portal. We suggest setting up your account profile and notification settings for an optimal user experience.'),

      array('id' => '66','trigger'=>'password-reset','role_id' => '1','name' => 'Account Password Reset','slug' => 'Account Password Reset','redirect_to' => '@change_password','body' => 'Your account password was successfully updated! If you did not request this password change, please notify a coordinator immediately.'),
      array('id' => '67','trigger'=>'password-reset','role_id' => '2','name' => 'Account Password Reset','slug' => 'Account Password Reset','redirect_to' => '@change_password','body' => 'Your account password was successfully updated! If you did not request this password change, please notify a coordinator immediately.'),
      array('id' => '68','trigger'=>'password-reset','role_id' => '5','name' => 'Account Password Reset','slug' => 'Account Password Reset','redirect_to' => '@change_password','body' => 'Your account password was successfully updated! If you did not request this password change, please notify a coordinator immediately.'),

      array('id' => '69','trigger'=>'suspicious-activity','role_id' => '1','name' => 'Suspicious Account Activity','slug' => 'sends when a user clicks "Report suspicious activity" in an email or in their portal','redirect_to' => NULL,'body' => '[Insert user name] has reported suspicious activity in their Eclipse account:

    [Show date, time, and what triggered the alert (ex: Clicked "Did not request password reset")]'),
      array('id' => '70','trigger'=>'account-lock-notification','role_id' => '1','name' => 'Account Lock-out Notification','slug' => 'sends when a user clicks "Report suspicious activity" in an email or in their portal','redirect_to' => NULL,'body' => '[Insert user name] has been locked out of their Eclipse account:

    [Show what triggered the Lockout (ex: too many login attempts; user reported suspicious activity)]'),
      array('id' => '71','trigger'=>'account-lock-notification','role_id' => '2','name' => 'Account Lock-out Notification','slug' => 'send when provider is locked out of their account','redirect_to' => NULL,'body' => '[Insert user name] has been locked out of their Eclipse account:

    [Show what triggered the Lockout (ex: too many login attempts; user reported suspicious activity)]'),
      array('id' => '72','trigger'=>'account-lock-notification','role_id' => '5','name' => 'Account Lock-out Notification','slug' => 'send when customer/consumer/staff is locked out of their account','redirect_to' => NULL,'body' => '[Insert user name] has been locked out of their Eclipse account:

    [Show what triggered the Lockout (ex: too many login attempts; user reported suspicious activity)]'),
      array('id' => '73','trigger'=>'referral-credit-thank-email','role_id' => '2','name' => 'Referral- Thank you email + credit','slug' => 'Sends 24-hours after a booking that has a provider\'s referral code','redirect_to' => '@referrals','body' => 'Thank you for recommending @admin_company  to others!

    As part of our appreciation, a credit for @referral_amount  will be added to your payroll.

    Keep spreading the word!'),
      array('id' => '74','trigger'=>'referral-credit-thank-email','role_id' => '5','name' => 'Referral- Thank you email + credit','slug' => 'Sends 24-hours after a booking that has a provider\'s referral code','redirect_to' => '@referrals','body' => 'Thank you for recommending @admin_company  to others!

    As part of our appreciation, a credit for @referral_amount  will be added to your account.

    Keep spreading the word!'),
      array('id' => '75','trigger'=>'feedback-email','role_id' => '2','name' => 'Feedback Request Email','slug' => 'Sends 1-hour after a booking.','redirect_to' => NULL,'body' => 'Thank you for your recent services: ( @booking_number, @booking_date, @booking_start_at  )
    In order to help us improve services for this customer in the future, you are invited to share your feedback.'),

      array('id' => '76','trigger'=>'feedback-email','role_id' => '5','name' => 'Feedback Request Email','slug' => 'Sends 1-hour after a booking.','redirect_to' => NULL,'body' => 'We hope you had a positive service experience today: ( @booking_number, @booking_service  ) In order to help us to improve our services, you are invited to share any feedback you have.'),

      array('id' => '77','trigger'=>'document-upload', 'role_id' => '1','name' => 'Document Uploaded to Drive','slug' => 'a user uploads a document to their account','redirect_to' => '@provider_drive','body' => '@provider  has uploaded a new document to their drive: @document_name'),

      array('id' => '78','trigger'=>'missing-timesheet', 'role_id' => '2','name' => 'Missing Timesheet','slug' => '24-hours after a booking ends for any assignment that has a timesheet requirement that has not been satisfied','redirect_to' => '@booking_detail','body' => 'Thank you for your recent services:

    ( @booking_number, @booking_date, @booking_start_at  )

    Please upload the assignment timesheet at your earliest convenience. This assignment will be processed for payment after a timesheet has been submitted. Thank you!'),
      array('id' => '79','trigger'=>'assignment-endTime-updated','role_id' => '1','name' => 'Assignment End-time Updated','slug' => 'Customer, provider, or admin modifies a completed booking\'s actual end-time','redirect_to' => '@booking_detail','body' => 'A completed assignment\'s end-time has been updated: ( @booking_number, @booking_date, @booking_start_at  )'),
      array('id' => '80','trigger'=>'assignment-endTime-updated','role_id' => '2','name' => 'Assignment End-time Updated','slug' => 'Provider\'s completed assignment end-time is updated','redirect_to' => '@booking_detail','body' => 'One of your completed assignments continued past its scheduled end-time and has been updated accordingly:  ( @booking_number )'),
      array('id' => '81','trigger'=>'assignment-endTime-updated','role_id' => '5','name' => 'Assignment End-time Updated','slug' => 'admin, provider, or customer updates a booking\'s actual end-time','redirect_to' => '@booking_detail','body' => 'One of your service requests continued past its scheduled end-time and has been updated accordingly: @booking_number'),

     array('id' => '82','trigger'=>'credential-warning', 'role_id' => '2','name' => 'Expiring Credentials Warning','slug' => 'Provider\'s credentials are about to expire. Should send 30-days, 15-days, 7-days and 1-day before expiration','redirect_to' => '@mydrive','body' => 'One of your credential documents is set to expire soon: @document_name @document_expiry_date
    Please upload your updated credentials to My Drive soon!'),

     array('id' => '83','trigger'=>'credential-alert', 'role_id' => '2','name' => 'Expired Credentials Alert','slug' => 'Provider\'s credentials have expired. Should send every 7-days until a new document is uploaded','redirect_to' => '@mydrive','body' => 'One of your credential documents has expired:

    @document_name   @document_expiry_date

    Please upload your updated credentials to My Drive soon!'),
      array('id' => '84','trigger'=>'assignment-returned','role_id' => '1','name' => 'Provider Assignment Returned','slug' => 'a provider returns an assignment on their schedule','redirect_to' => '@booking_detail','body' => '@provider has returned the following assignment: ( @booking_number, @booking_date, @consumer  )'),
      array('id' => '85','trigger'=>'assignment-returned','role_id' => '2','name' => 'Provider Assignment Returned','slug' => 'a provider returns an assignment on their schedule','redirect_to' => '@available_bookings','body' => 'As per your request, you have been unscheduled for the following assignment: ( @booking_number, @booking_date, @booking_start_at  )'),

      array('id' => '86','trigger'=>'customer-chat-waiting',  'role_id' => '1','name' => 'Pending Customer Chat Waiting in Eclipse','slug' => 'customer messages admin while they are logged out of their account','redirect_to' => '@messages','body' => '@consumer has sent you a message through the Eclipse portal. @chat_from_customer'),

      array('id' => '87','trigger'=>'update-payment-preferences', 'role_id' => '1','name' => 'Updated Provider Payment Preferences','slug' => 'provider makes a change to their payment preference tab or uploads a new document to the tab','redirect_to' => '@provider_payment_preference_url','body' => '@provider has updated their preferred payment preferences.'),
      array('id' => '88','trigger'=>'update-payment-preferences', 'role_id' => '2','name' => 'Updated Provider Payment Preferences','slug' => 'provider makes a change to their payment preference tab or uploads a new document to the tab','redirect_to' => '@provider_payment_preference_url','body' => 'You have successfully updated your preferred payment preferences.'),

      array('id' => '89','trigger'=>'customer-approved-quote', 'role_id' => '1','name' => 'Customer has approved your service quote','slug' => 'someone submits a lead form','redirect_to' => '@quote_details','body' => '@consumer has approved a quote request for services.'),

      array('id' => '90','trigger'=>'customer-denied-quote','role_id' => '1','name' => 'Customer has denied your service quote','slug' => 'someone submits a lead form','redirect_to' => '@quote_details','body' => '@consumer has denied a quote request for services.'),
    );



    foreach ($notification_templates as $template) {
      DB::table('notification_templates')->insert($template);
    }
  }
}
