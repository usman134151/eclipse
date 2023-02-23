<?php

namespace App\Http\Controllers\Tenant\Api;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant\User;
use App\Traits\Tenant\ApiResponse;

class ApiController extends Controller
{
    use ApiResponse;
     /**
     * get user information into array.
     *
     * @param  int  $user_id
     * @return array
     */
    public function usersDataMap($user_id = 0)
    {
        $user = User::find($user_id);
        $userData = [
                    'uid'           =>  $user->id,
                    'email'         =>  $user->email,
                    'user_name'     =>  $user->name,
                    'first_name'    =>  $user->first_name,
                    'last_name'     =>  $user->last_name,
                    'status'        =>  $user->status,
                    'is_certified'  =>  1,
                    'provider_id'   =>  'WE-37272',
                    'phone'         =>  '(923)023-9663',
                    'referral_code' => 'ABCDERT',
                    'gender'        => 'Male',
                    'date_of_birth' => '23/04/1990',
                    'education' => 'Master',
                    'ethnicity' => 'White',
                    'time_zone' => 'USA(GMT-5)',
                    'pronouns'      => 'He',
                    'preferred_lang'=> 'English',
                    'country'       => 'Australia',
                    'state'         => 'Australia',
                    'city'          => 'Sydeny',
                    'zip_code'      => '84729',
                    'address_line_1'       => 'National Library of Australia, attraction, Canberra, Australia',
                    'address_line_2'       => 'National Library of Australia, attraction, Canberra, Australia',
                    'latitude'      => '-35.29648635',
                    'longitude'     => '149.12951134999997',
                    'accommodation' => 'Spoken Language Interpreting Services',
                    'industry'      =>   'Language Translater',
                    'certificates'  => [
                                    [
                                        'document_id'    =>     1,
                                        'document_title'    =>  'Certification',
                                        'document'     =>  'https://www.pakainfo.com/wp-content/uploads/2021/09/sample-image-url-for-testing-300x169.jpg',
                                        'expiration_date'   =>  '2022-05-27 00:00:00',
                                        'status'            =>  '1',
                                    ],
                                    [
                                        
                                        'document_id'    =>     2,
                                        'document_title'    =>  'Certification',
                                        'document'     =>  'https://www.pakainfo.com/wp-content/uploads/2021/09/sample-image-url-for-testing-300x169.jpg',
                                        'expiration_date'   =>  '2022-05-27 00:00:00',
                                        'status'            =>  '1',
                                    ]
                                ],
                    'profile_pic' => $user->gravatar_url,
                    'industry' => 'Educations',
                    'start_date' => '01/01/2023',
                    'end_date' => '22/02/2023',
                    'industry' => 'Educations',
                    'profile_pic' => $user->gravatar_url,
                    'payment_preferences' => 'direct_deposit_method',            
                    'availability_url' => url('/settings/user'),            
                    'created_at' => $user->created_at,
                ];
        return $userData;
    }

    /**
     * get assignment information into array.
     *
     * @param  int  $bookingId
     * @return array
     */
    public function assignmentsDataMap($bookingId = 0)
    {
       
        $bookingData = [
                    'assignment_id'         =>  $bookingId,
                    'assignment_no'         =>  '101787-'.$bookingId,
                    'assignment_start_date' =>  api_date_formate(date('d-m-Y')),
                    'assignment_type' => ($bookingId % 2 == 0)?'virtual':'in-person',
                    'assignment_start_time' =>  '11:15 AM',
                    'assignment_end_date' =>  api_date_formate(date('d-m-Y')),
                    'assignment_end_time' =>  '1:15 PM',
                    'industory'             =>  'Religion',
                    'accommondation'        =>  'Sign Language Interpreting Services',
                    'service'               =>  'American Sign Language Interpreting',
                    'specialization'        =>  'Tester',
                    'address'               =>  'National Library of Australia, attraction, Canberra, Australia',
                    'latitude'              =>  '-35.29648635',
                    'longitude'             =>  '149.12951134999997',
                    'city'                  =>  'Australia',
                    'province'                 =>  'Australia',
                    'country'               =>  'Australia',
                    'customer'              =>  'Alex John',
                    'company'               =>  'New Microsoft',
                    'meeting_name'          =>  'Language Interpreting',
                    'meeting_link'          =>  ($bookingId % 2 == 0)?'https://meet.google.com/gdo-qgdjfjf-test':null,
                    'status'                =>  'pending',
                    'no_of_provider'        =>  5,
                ];
        return $bookingData;
    }
    
    
    /**
     * get notification information into array.
     *
     * @param  int  $notificationId
     * @return array
     */
    public function notificationMapData($notificationId = 0)
    {
       
        $notificationData = [
                    'notification_id'         =>  $notificationId,
                    'notification_title'         =>  'Assignment Invite',
                    'notification_message' =>  'John invited you for assignment 38892-9',
                    'assignment_id'      =>  $notificationId,
                    'assignment_no'         =>  '101787-'.$notificationId,
                    'record_type' =>  'assignment_invite',
                    'is_seen' => $notificationId%2,
                    'created_at' =>  time(),
                ];
        return $notificationData;
    }
    

    /**
     * get invoice information into array.
     *
     * @param  int  $invoiceId
     * @return array
     */
    public function invoiceDataMap($invoiceId = 0)
    {
       
        $invoiceData = [
                    'invoice_id'         =>  $invoiceId,
                    'invoice_no'         =>  'R-10178'.$invoiceId,
                    'total' =>  '$300',
                    'issued_at' => api_date_formate(date('d/m/Y h:iA')),
                    'scheduled_payment_date' =>   api_date_formate(date('d/m/Y h:iA')),
                    'paied_at' =>  date('d/m/Y h:iA'),
                    'payment_method' =>  'Mail a check',
                    'status'             =>  'Paid',
                    'invoice_url' => url('tenant/admin/provider/remittances'),
                ];
        return $invoiceData;
    }

    /**
     * get reimbursement information into array.
     *
     * @param  int  $reimbursementId
     * @return array
     */
    public function reimbursementDataMap($reimbursementId = 0)
    {
       
        $reimbursementData = [
            'reimbursement_id'         =>  $reimbursementId,
            'assignment_id'         =>  $reimbursementId,
            'assignment_no'         =>  '101787-'.$reimbursementId,
            'reason' => 'reimbursement',
            'document' => [
                'document_id'    =>     1,
                'document_title'    =>  'Reimbursement',
                'document'     =>  'https://www.pakainfo.com/wp-content/uploads/2021/09/sample-image-url-for-testing-300x169.jpg',
                'expiration_date'   =>  api_date_formate(date('Y-m-d')),
                'status'            =>  '1',
            ],
            'amount' =>  '$300',
            'issued_at' => api_date_formate(date('d/m/Y h:iA')),
            'payment_method' =>  'Cash',
            'payment_status' =>  'Approved',
            'payment_is_done'   => 'Not Yet',
            'status'             =>  'Approved'
        ];
        return $reimbursementData;
    }
    
     /**
     * get invitation information into array.
     *
     * @param  int  $invitationId
     * @return array
     */
    public function invitationDataMap($invitationId)
    {
        $invitationData = [
            'invitation_id' =>  $invitationId,
            'record_id'     =>  $invitationId,
            'record_type'   => 'assignment_invite',
            'sender_id'     => 1,
            'receiver_id'   => 2,
            'status'        => 'accepted',
        ];
        return $invitationData;
    }

    /**
     * get Calendar Event information into array.
     *
     * @param  int  $month
     * @param  int  $year
     * @param  int  $userId
     * @return array
     */
    public function calendarEventDataMap( $month = 0 , $year = 0 , $userId = 0 )
    {
        $current_month_year = strtotime($month.'/01/'.$year);
        $date = date('Y-m-d',$current_month_year);
        $calenderEventData = [];
        while (strtotime($date) <= strtotime($year.'-'.$month. '-' . date('t', strtotime($date)))) {
            if(strtotime($date) >= strtotime(date('Y-m-d')) && strtotime($date) < strtotime('+2 weeks')){
                $calenderEventData[$date] = [
                    [
                        'assignment_id'         =>  date('d',strtotime($date)),
                        'assignment_no'         =>  '101787-'.date('d',strtotime($date)),
                        'assignment_start_date' =>  date('d/m/Y',strtotime($date)),
                        'assignment_type' => (date('d',strtotime($date)) % 2 == 0)?'virtual':'in-person',
                        'assignment_start_time' =>  '11:15 AM',
                        'assignment_end_date' =>  date('d/m/Y',strtotime($date)),
                        'assignment_end_time' =>  '1:15 PM',
                        'accommondation'        =>  'Sign Language Interpreting Services',
                        'service'               =>  'American Sign Language Interpreting',
                    ],
                    [
                        'assignment_id'         =>  date('d',strtotime($date)),
                        'assignment_no'         =>  '101787-'.date('d',strtotime($date)),
                        'assignment_start_date' =>  date('d/m/Y',strtotime($date)),
                        'assignment_type' => (date('d',strtotime($date)) % 2 == 0)?'virtual':'in-person',
                        'assignment_start_time' =>  '11:15 AM',
                        'assignment_end_date' =>  date('d/m/Y',strtotime($date)),
                        'assignment_end_time' =>  '1:15 PM',
                        'accommondation'        =>  'Sign Language Interpreting Services',
                        'service'               =>  'American Sign Language Interpreting',
                    ]    
                ];
            }
            $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
        }
        return $calenderEventData;
    }
    
    /**
     *  Api Validation
     *   
     */

    public function vallidateApi(Request $request,$rules = [])
    {
        $validateUser = Validator::make($request->all(),$rules);

        if($validateUser->fails()){
            return $this->response([
                'errors' => $validateUser->errors(),
            ],401);
        }

        return true;
    }

}
