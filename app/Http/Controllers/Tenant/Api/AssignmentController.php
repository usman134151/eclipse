<?php

namespace App\Http\Controllers\Tenant\Api;

use App\Http\Controllers\Tenant\Api\ApiController;
use Illuminate\Http\Request;
use App\Services\AssignmentService;

class AssignmentController extends ApiController
{

    protected $assignmentService;

    /**
     *  Initialize services for this controller.
     *
     */
    public function __construct(AssignmentService $assignmentService)
    {
        $this->assignmentService = $assignmentService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'assignment_type' => 'required',
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            }   


            if($request->assignment_type == 'upcomming')
            {
                $assignmentData = [
                        'active_assignment'  =>  
                        [
                            $this->assignmentService->getContent( ['id' => 1 ],$type = 'active' ),
                            $this->assignmentService->getContent( ['id' => 2 ],$type = 'active' ),
                        ],

                        'today_assignment'  =>  
                        [
                            $this->assignmentService->getContent( ['id' => 1 ],$type = 'today' ),
                            $this->assignmentService->getContent( ['id' => 2 ],$type = 'today' ),
                        ],

                        'upcomming_assignment'  =>  
                        [
                            $this->assignmentService->getContent( ['id' => 3 ], $type = 'upcomming'  ),
                            $this->assignmentService->getContent( ['id' => 4 ], $type = 'upcomming'  ),
                        ]                            
                
                    ];
                }else{
                    $assignmentData = [
                    
                            'assignment_invitation'  =>  
                            [
                                $this->assignmentService->getContent( ['id' => 5 ] ),
                                $this->assignmentService->getContent( ['id' => 6 ] ),
                            ],

                            'unassign_assignment'  =>  
                            [
                                $this->assignmentService->getContent( ['id' => 7 ] ),
                                $this->assignmentService->getContent( ['id' => 8 ] ),
                            ]                            
                    
                        ];
                }        
            return $this->response($assignmentData,200);
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'assignment_id' => 'required',
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            }
            $data['id'] =$request->assignment_id;
            
            $result = [
                'booking_details' => $this->assignmentService->getAllContent($data),
                'payment_details' => $this->assignmentService->paymentDetails( $data ),
                'attachments' => [
                                    [
                                        'document_id'    =>     1,
                                        'document_title'    =>  'Assignment Doc',
                                        'document'     =>  'https://www.pakainfo.com/wp-content/uploads/2021/09/sample-image-url-for-testing-300x169.jpg',
                                        'expiration_date'   =>  '2022-05-27 00:00:00',
                                        'status'            =>  '1',
                                    ],
                                    [
                                        
                                        'document_id'    =>     2,
                                        'document_title'    =>  'Assignment Doc',
                                        'document'     =>  'https://www.pakainfo.com/wp-content/uploads/2021/09/sample-image-url-for-testing-300x169.jpg',
                                        'expiration_date'   =>  '2022-05-27 00:00:00',
                                        'status'            =>  '1',
                                    ]
                               ],
                'providers' => [
                    [
                        'uid' => $this->usersDataMap(1)['uid'],
                        'user_name' => $this->usersDataMap(1)['user_name'],
                        'phone' => $this->usersDataMap(1)['phone'],
                        'email' => $this->usersDataMap(1)['email'],
                        'profile_pic' => $this->usersDataMap(1)['profile_pic'],
                    ],
                    [
                        'uid' => $this->usersDataMap(2)['uid'],
                        'user_name' => $this->usersDataMap(2)['user_name'],
                        'phone' => $this->usersDataMap(2)['phone'],
                        'email' => $this->usersDataMap(2)['email'],
                        'profile_pic' => $this->usersDataMap(2)['profile_pic'],
                    ],
                    [
                        'uid' => $this->usersDataMap(3)['uid'],
                        'user_name' => $this->usersDataMap(3)['user_name'],
                        'phone' => $this->usersDataMap(3)['phone'],
                        'email' => $this->usersDataMap(3)['email'],
                        'profile_pic' => $this->usersDataMap(3)['profile_pic'],
                    ]
                ]
            ];
            return $this->response( $result ,200);
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Update Start Time Of Assignment.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function updateTime(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'assignment_id' => 'required',
                    'assignment_times' => 'required',
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            }  

            //Todo Update Work

            $result =  $this->assignmentsDataMap($request->assignment_id);
            return $this->response($result,600);
            
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }

    /**
     * Get Check In Details Of Assignment.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function checkInOutDetails(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'assignment_id' => 'required'
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            }  

            //Todo Update Work
            $bookingId = $request->assignment_id;
            $result = [
                'assignment_id'         =>  $bookingId,
                'assignment_no'         =>  '101787-'.$bookingId,
                'assignment_type' => ($bookingId % 2 == 0)?'virtual':'in-person',
                'assignment_start_date' =>  api_date_formate(date('d-m-Y')),
                'assignment_start_time' =>  '11:15 AM',
                'assignment_end_date' =>  api_date_formate(date('d-m-Y')),
                'assignment_end_time' =>  '1:15 PM',
                'industory'             =>  'Religion',
                'accommondation'        =>  'Sign Language Interpreting Services',
                'service'               =>  'American Sign Language Interpreting',
                'specialization'        =>  'Tester',
                'address'             =>  'National Library of Australia, attraction, Canberra, Australia',
                'latitude'            =>  '-35.29648635',
                'longitude'           =>  '149.12951134999997',
                'city'                =>  'Australia',
                'province'            =>  'Australia',
                'country'             =>  'Australia',
                'customer'            =>  'Alex John',
                'company'             =>  'New Microsoft',
                'meeting_name'        =>  'Language Interpreting',
                'meeting_link'        =>  ($bookingId % 2 == 0)?'https://meet.google.com/gdo-qgdjfjf-test':null,
                'status'              =>  'pending',
                'location_verified'   =>  1,
                'check_in_date'       =>  null,
                'check_out_date'      =>  null,
            ];
            return $this->response($result,200);
            
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }


     /**
     * Get Check In Details Of Assignment.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function checkInDetails(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'assignment_id' => 'required'
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            }  

            //Todo Update Work
            $bookingId = $request->assignment_id;
            $result = [
                'assignment_id'         =>  $bookingId,
                'assignment_no'         =>  '101787-'.$bookingId,
                'assignment_type' => ($bookingId % 2 == 0)?'virtual':'in-person',
                'assignment_start_date' =>  api_date_formate(date('d-m-Y')),
                'assignment_start_time' =>  '11:15 AM',
                'assignment_actual_start_time' =>  '11:15 AM',
                'assignment_end_date' =>  api_date_formate(date('d-m-Y')),
                'assignment_end_time' =>  '1:15 PM',
                'industory'             =>  'Religion',
                'accommondation'        =>  'Sign Language Interpreting Services',
                'service'               =>  'American Sign Language Interpreting',
                'specialization'        =>  'Tester',
                'address'             =>  'National Library of Australia, attraction, Canberra, Australia',
                'latitude'            =>  '-35.29648635',
                'longitude'           =>  '149.12951134999997',
                'city'                =>  'Australia',
                'province'            =>  'Australia',
                'country'             =>  'Australia',
                'customer'            =>  'Alex John',
                'company'             =>  'New Microsoft',
                'meeting_name'        =>  'Language Interpreting',
                'meeting_link'        =>  ($bookingId % 2 == 0)?'https://meet.google.com/gdo-qgdjfjf-test':null,
                'status'              =>  'pending',
            ];
            return $this->response($result,200);
            
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }

    /**
     *  Check In Submit Api
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function checkInStore(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'assignment_id' => 'required',
                    'actual_start_time' => 'required',
                    'company_name' => 'required',
                    'appointment_type' => 'required',
                    'covid_regulation' => 'required',
                    'is_new_patient' => 'required',
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            }  
            $result = [];
            return $this->response($result,601);
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }


     /**
     * Get Check Out Details Of Assignment.
     * Step: 1st 
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function checkOutDetails(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'assignment_id' => 'required'
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            }  

            //Todo Update Work
            $bookingId = $request->assignment_id;
            $result = [
                'assignment_id'         =>  $bookingId,
                'assignment_no'         =>  '101787-'.$bookingId,
                'assignment_type' => ($bookingId % 2 == 0)?'virtual':'in-person',
                'assignment_start_date' =>  api_date_formate(date('d-m-Y')),
                'assignment_actual_start_date' =>  api_date_formate(date('d-m-Y')),
                'assignment_start_time' =>  '11:15 AM',
                'assignment_actual_start_time' =>  '11:15 AM',
                'assignment_end_date' =>  api_date_formate(date('d-m-Y')),
                'assignment_end_time' =>  '1:15 PM',
                'assignment_actual_end_time' =>  '1:15 PM',
                'industory'             =>  'Religion',
                'accommondation'        =>  'Sign Language Interpreting Services',
                'service'               =>  'American Sign Language Interpreting',
                'specialization'        =>  'Tester',
                'address'             =>  'National Library of Australia, attraction, Canberra, Australia',
                'latitude'            =>  '-35.29648635',
                'longitude'           =>  '149.12951134999997',
                'city'                =>  'Australia',
                'province'            =>  'Australia',
                'country'             =>  'Australia',
                'customer'            =>  'Alex John',
                'company'             =>  'New Microsoft',
                'meeting_name'        =>  'Language Interpreting',
                'meeting_link'        =>  ($bookingId % 2 == 0)?'https://meet.google.com/gdo-qgdjfjf-test':null,
                'status'              =>  'pending',
                'sample_timesheet'    => 'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf',
                'uploaded_timesheet_link' => null,
            ];
            return $this->response($result,200);
            
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }


    /**
    *  Store Checkout 1st Step Of Assignment.
    *  
    * @param  Request $request
    * @return \Illuminate\Http\Response
    */
    public function storeCheckIn(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'assignment_id' => 'required',
                    'actual_start_time' => 'required',
                    'actual_end_time' => 'required',
                    'signater_type' => 'required',
                    'timesheet_file' => 'required',
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            } 
            $result = array();
            $result['assignment_id'] = $request->assignment_id;
            $result['assignment_no'] = '101787-'.$request->assignment_id;
            $result['next_step'] = 'checkout_end_form';
            return $this->response($result,602); 
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }    
    }

    /**
    *  Store Checkout 2nd Step Of Assignment.
    *  
    * @param  Request $request
    * @return \Illuminate\Http\Response
    */
    public function storeCheckOutForm(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'assignment_id' => 'required',
                    'company_name' => 'required',
                    'appointment_type' => 'required',
                    'covid_regulation' => 'required',
                    'is_new_patient' => 'required',
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            } 
            $result = array();
            $result['assignment_id'] = $request->assignment_id;
            $result['assignment_no'] = '101787-'.$request->assignment_id;
            $result['next_step'] = 'checkout_provider_notes';
            return $this->response($result,603); 
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }    
    }


    
    
    /**
    *  Store Checkout 3rd Step Of Assignment.
    *  
    * @param  Request $request
    * @return \Illuminate\Http\Response
    */
    public function storeCheckOutNotes(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'assignment_id' => 'required',
                    'note' => 'required',
                    'accept_term_condition' => 'required'
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            } 
            $result = array();
            $result['assignment_id'] = $request->assignment_id;
            $result['assignment_no'] = '101787-'.$request->assignment_id;
            $result['next_step'] = 'checkout_rating';
            return $this->response($result,604); 
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }    
    }


    /**
    *  Store Checkout 4th Step Of Assignment.
    *  
    * @param  Request $request
    * @return \Illuminate\Http\Response
    */
    public function storeCheckOutRating(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'assignment_id' => 'required',
                    'share_message' => 'required',
                    'share_rating' => 'required',
                    'share_feedback' => 'required'
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            } 
            $result = array();
            $result['assignment_id'] = $request->assignment_id;
            $result['assignment_no'] = '101787-'.$request->assignment_id;
            $result['next_step'] = null;
            return $this->response($result,605); 
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }    
    }


     /**
    * Store Check in And Out Provider Of Assignment.
    *
    * @param  Request $request
    * @return \Illuminate\Http\Response
    */
    public function storeAvailability(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'assignment_id' => 'required',
                    'availability_status' => 'required',
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            } 
            
            return $this->response([],661);
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }    
    }

    
}
