<?php

namespace App\Http\Controllers\Tenant\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notifications;
use App\Models\User;

class ApiController extends Controller
{
    public function response( $data = [] , $status_code = 200 )
    {
        $notification = Notifications::find($status_code);
        $response['message'] = $notification->message;
        $response['title'] = $notification->title;
        $response['message'] = $notification->message;
        $response['btn_link'] = $notification->btn_link;
        $response['btn_cancel'] = $notification->btn_cancel;
        $response['status_code']  =   $status_code = ($notification->base_code) ? $notification->base_code : $status_code ;
        $response['result'] = $data;
        return response()->json($response , $status_code );
    }
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
                    'phone'         =>  '(923)023-9663',
                    'referral_code' => 'ABCDERT',
                    'gender'        => 'Male',
                    'pronouns'      => 'He',
                    'preferred_lang'=> 'English',
                    'country'       => 'Australia',
                    'state'         => 'Australia',
                    'city'          => 'Sydeny',
                    'zip_code'      => '84729',
                    'address'       => 'National Library of Australia, attraction, Canberra, Australia',
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
                    'assignment_start_date' =>  '01/15/2023',
                    'assignment_start_time' =>  '11:15 AM',
                    'assignment_end_date' =>  '01/15/2023',
                    'assignment_end_time' =>  '1:15 PM',
                    'industory'             =>  'Religion',
                    'accommondation'        =>  'Sign Language Interpreting Services',
                    'service'               =>  'American Sign Language Interpreting',
                    'specialization'        =>  'Tester',
                    'address'               =>   'National Library of Australia, attraction, Canberra, Australia',
                    'latitude'              =>  '-35.29648635',
                    'longitude'             =>  '149.12951134999997',
                    'city'                  =>  'Australia',
                    'state'                 =>  'Australia',
                    'country'               =>  'Australia',
                    'customer'              =>  'Alex John',
                    'company'               =>  'New Microsoft',
                    'meeting_link'          =>  'https://meet.google.com/gdo-qgdjfjf-test',
                    'status'                =>  'pending',
                    'no_of_provider'        =>  5,
                ];
        return $bookingData;
    }

}
