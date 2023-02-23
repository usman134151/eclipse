<?php

namespace App\Http\Controllers\Tenant\Api;

use Illuminate\Http\Request;
use App\Services\FileService;
use App\Models\Tenant\UserDetail AS Profile;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Tenant\Api\ApiController;
class UsersController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function get($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authUser()
    {
        $user_id = Auth::user()->id;
        $result = $this->usersDataMap( $user_id );
        return $this->response($result, 200);
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
     *  Desc: Provider Rates Api Call
     *  Dev:  Sakhawat Kamran
     *  @param int $provider_id
     *  @return \Illuminate\Http\Response
     */
    public function providerRates(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'provider_id' => 'required',
                ]
            );
            if($validate !== true )
            {
                return $validate;
            }   
            
            $result = [
                'accommodations' => 
                [
                    [
                        'accommodation_id'  =>  1,
                        'accommodation_name' => 'Sign And Language Interpreting Services',
                        'status' => 1,
                        'rate_service_wise' => 
                        [
                            [
                                'service_id'    =>  1,
                                'service_name'  =>  'Both Day Rate (New)',
                                'standerd_rates' => [
                                    [
                                        'rate_type' => 'in-person',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => null,
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
        
                                    ],
                                    [
                                        'rate_type' => 'virtual',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => null,
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
                                    ],
                                    [
                                        'rate_type' => 'phone',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => null,
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
                                    ],
                                    [
                                        'rate_type' => 'teleconference',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => null,
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
                                    ]
                                    
                                ],
                                'specialization_rates'  =>  
                                [
                                    [
                                        'specialization_id'     =>  1,
                                        'specialization_type'   =>  'Medical',
                                        'in_person_rate'        =>  '$40',
                                        'virtual_rate'          =>  '$20',
                                        'phone_rate'          =>  '$15',
                                        'teleconference_rate'          =>  '$10',
                                    ],
                                    [
                                        'specialization_id'     =>  2,
                                        'specialization_type'   =>  'Legal',
                                        'in_person_rate'        =>  '$30',
                                        'virtual_rate'          =>  '$20',
                                        'phone_rate'          =>  '$15',
                                        'teleconference_rate'          =>  '$10',
                                    ]   
                                ]
                            ],
                            [
                                'service_id'    =>  2,
                                'service_name'  =>  'Services For Testing Video',
                                'standerd_rates' => [
                                    [
                                        'rate_type' => 'in-person',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => '$101.00',
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
                                    ],
                                    [
                                        'rate_type' => 'virtual',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => '$101.00',
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
                                    ],
                                    [
                                        'rate_type' => 'phone',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => null,
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
                                    ],
                                    [
                                        'rate_type' => 'teleconference',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => null,
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
                                    ]
                                ],
                                'specialization_rates'  =>  
                                [
                                    [
                                        'specialization_id'     =>  1,
                                        'specialization_type'   =>  'Medical',
                                        'in_person_rate'        =>  null,
                                        'virtual_rate'          =>  '$20',
                                        'phone_rate'          =>  '$15',
                                        'teleconference_rate'          =>  '$10',
                                    ],
                                    [
                                        'specialization_id'     =>  2,
                                        'specialization_type'   =>  'Legal',
                                        'in_person_rate'        =>  null,
                                        'virtual_rate'          =>  '$20',
                                        'phone_rate'          =>  '$15',
                                        'teleconference_rate'          =>  '$10',
                                    ],
                                    [
                                        'specialization_id'     =>  2,
                                        'specialization_type'   =>  'Conferance',
                                        'in_person_rate'        =>  null,
                                        'virtual_rate'          =>  '$20',
                                        'phone_rate'          =>  '$15',
                                        'teleconference_rate'          =>  '$10',
                                    ]      
                                ]
                            ]
        
                        ]
                    ],
                    [
                        'accommodation_id'  =>  1,
                        'accommodation_name' => 'Sign And Language Interpreting Services',
                        'status' => 1,
                        'rate_service_wise' => 
                        [
                            [
                                'service_id'    =>  1,
                                'service_name'  =>  'Both Day Rate (New)',
                                'standerd_rates' => [
                                    [
                                        'rate_type' => 'in-person',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => null,
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
        
                                    ],
                                    [
                                        'rate_type' => 'virtual',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => null,
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
                                    ]
                                ],
                                'specialization_rates'  =>  
                                [
                                    [
                                        'specialization_id'     =>  1,
                                        'specialization_type'   =>  'Medical',
                                        'in_person_rate'        =>  '$40',
                                        'virtual_rate'          =>  '$20',
                                    ],
                                    [
                                        'specialization_id'     =>  2,
                                        'specialization_type'   =>  'Legal',
                                        'in_person_rate'        =>  '$30',
                                        'virtual_rate'          =>  '$20',
                                    ]   
                                ]
                            ],
                            [
                                'service_id'    =>  2,
                                'service_name'  =>  'Services For Testing Video',
                                'standerd_rates' => [
                                    [
                                        'rate_type' => 'in-person',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => '$101.00',
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
                                    ],
                                    [
                                        'rate_type' => 'virtual',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => '$101.00',
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
                                    ]
                                ],
                                'specialization_rates'  =>  
                                [
                                    [
                                        'specialization_id'     =>  1,
                                        'specialization_type'   =>  'Medical',
                                        'in_person_rate'        =>  null,
                                        'virtual_rate'          =>  '$20',
                                    ],
                                    [
                                        'specialization_id'     =>  2,
                                        'specialization_type'   =>  'Legal',
                                        'in_person_rate'        =>  null,
                                        'virtual_rate'          =>  '$20',
                                    ],
                                    [
                                        'specialization_id'     =>  2,
                                        'specialization_type'   =>  'Conferance',
                                        'in_person_rate'        =>  null,
                                        'virtual_rate'          =>  '$20',
                                    ]      
                                ]
                            ]
        
                        ]
                    ],
                    [
                        'accommodation_id'  =>  1,
                        'accommodation_name' => 'Sign And Language Interpreting Services',
                        'status' => 1,
                        'rate_service_wise' => 
                        [
                            [
                                'service_id'    =>  1,
                                'service_name'  =>  'Both Day Rate (New)',
                                'standerd_rates' => [
                                    [
                                        'rate_type' => 'in-person',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => null,
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
        
                                    ],
                                    [
                                        'rate_type' => 'virtual',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => null,
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
                                    ]
                                ],
                                'specialization_rates'  =>  
                                [
                                    [
                                        'specialization_id'     =>  1,
                                        'specialization_type'   =>  'Medical',
                                        'in_person_rate'        =>  '$40',
                                        'virtual_rate'          =>  '$20',
                                    ],
                                    [
                                        'specialization_id'     =>  2,
                                        'specialization_type'   =>  'Legal',
                                        'in_person_rate'        =>  '$30',
                                        'virtual_rate'          =>  '$20',
                                    ]   
                                ]
                            ],
                            [
                                'service_id'    =>  2,
                                'service_name'  =>  'Services For Testing Video',
                                'standerd_rates' => [
                                    [
                                        'rate_type' => 'in-person',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => '$101.00',
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
                                    ],
                                    [
                                        'rate_type' => 'virtual',
                                        'day_rate_price' => '$500.00',
                                        'after_hour_rate_price' => '$101.00',
                                        'expedited_rate_hours' => 1,
                                        'expedited_rate_price' => '$5.00',
                                    ]
                                ],
                                'specialization_rates'  =>  
                                [
                                    [
                                        'specialization_id'     =>  1,
                                        'specialization_type'   =>  'Medical',
                                        'in_person_rate'        =>  null,
                                        'virtual_rate'          =>  '$20',
                                    ],
                                    [
                                        'specialization_id'     =>  2,
                                        'specialization_type'   =>  'Legal',
                                        'in_person_rate'        =>  null,
                                        'virtual_rate'          =>  '$20',
                                    ],
                                    [
                                        'specialization_id'     =>  2,
                                        'specialization_type'   =>  'Conferance',
                                        'in_person_rate'        =>  null,
                                        'virtual_rate'          =>  '$20',
                                    ]      
                                ]
                            ]
        
                        ]
                    ]
                ]   
               
            ];
            return $this->response($result, 200);

        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }

    /**
     *  Desc: Notification List Api Call
     *  Dev:  Sakhawat Kamran
     *  @return \Illuminate\Http\Response
     */
    public function notifications()
    {
        try{

            $result = [
                $this->notificationMapData(1),
                $this->notificationMapData(2),
                $this->notificationMapData(3),
                $this->notificationMapData(4),
                $this->notificationMapData(5),
                $this->notificationMapData(6),
            ];
            return $this->response($result, 200);

        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }


    public function readAllNotification()
    {
        try{

            $result = [
            ];
            return $this->response($result, 662);

        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }

     /**
     *  Desc: Users Profile Image Store or Update Api Call
     *  Dev:  Sakhawat Kamran
     *  @return \Illuminate\Http\Response
     */
    public function storeOrUpdateProfileImage(Request $request)
    {
        try{
            $validate = $this->vallidateApi(
                $request,
                [
                    'profile_photo' => 'required',
                ]
            );
            if($validate !== true )
            {
                return $validate;
            }   
           
            $user = Auth::user();
            $request->merge([ 'document_title' => 'Other', 'no_expiration_date' => 1 , 'title'=>str_replace(' ','_',$user->first_name.' '.$user->last_name), 'record_id'=>$user->id ]);
            $document = FileService::upload( $request , 'profile_photo' , 'uploads\profile');
            $url = FileService::url($document->document_name);
           
            $profile = Profile::where('user_id',$user->id)->first();
            if(is_null($profile))
            $profile = new Profile();
            $profile->user_id = $user->id;
            $profile->profile_pic = $document->document_name;
            $profile->save();
            $result = $this->usersDataMap(Auth::user()->id);
            return $this->response($result, 200);

        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }

    /**
     *  Desc: Store or Update Payment Preferences Api Call
     *  Dev:  Sakhawat Kamran
     *  @return \Illuminate\Http\Response
     */
    public function providerPaymentMethod(Request $request)
    {
        try{
            $validate = $this->vallidateApi(
                $request,
                [
                    'payment_method' => 'required',
                ]
            );
            if($validate !== true )
            {
                return $validate;
            }   

            $result = $this->usersDataMap(Auth::user()->id);
            return $this->response($result, 305);

        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }


    /**
     *  Desc: Users Calander Api Call according to month wise
     *  Dev:  Sakhawat Kamran
     *  @return \Illuminate\Http\Response
     */
    public function authUserCalander(Request $request)
    {
        try{
            $validate = $this->vallidateApi(
                $request,
                [
                    'selected_calendar_month' => 'required',
                    'selected_calendar_year' => 'required',
                ]
            );
            if($validate !== true )
            {
                return $validate;
            }   

            $result = $this->calendarEventDataMap($request->selected_calendar_month, $request->selected_calendar_year, Auth::user()->id);
            return $this->response($result, 200);

        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }
}
