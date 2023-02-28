<?php

namespace App\Http\Controllers\Tenant\Api;

use App\Models\Tenant\User;
use Illuminate\Http\Request;
use App\Services\FileService;
use Illuminate\Support\Facades\Auth;
use App\Models\Tenant\UserDetail AS Profile;
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
        try{
            $users = User::all();
            $result = [];
            foreach ($users as $user) {
                $result[] = [
                    'uid'           =>  $user->id,
                    'email'         =>  $user->email,
                    'user_name'     =>  $user->name,
                    'first_name'    =>  $user->first_name,
                    'last_name'     =>  $user->last_name,
                    'role'          =>  'Supervisor' , 
                    'status'        =>  'active',
                    'phone'         =>  '(923)023-9663',
                    'gender'        => 'Male',
                    'profile_pic' => $user->gravatar_url,
                ]; 
            }
            return $this->response($result, 200);
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
     * @param  \Illuminate\Http\Request  $request 
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $validate = $this->vallidateApi(
            $request,
            [
                'uid' => 'required',
            ]
        );
        if($validate !== true )
        {
            return $validate;
        }   
        $user_id = $request->uid;
        $user = User::find($user_id);
        $result =  [
            'uid'           =>  $user->id,
            'email'         =>  $user->email,
            'user_name'     =>  $user->name,
            'first_name'    =>  $user->first_name,
            'last_name'     =>  $user->last_name,
            'company'       => 'Example Company',
            'industry'      =>  'Language Translater',
            'role'          =>  'Supervisor' , 
            'status'        =>  'active',
            'is_certified'  =>  1,
            'phone'         =>  '(923)023-9663',
            'gender'        => 'Male',
            'date_of_birth' => api_date_formate('23-04-1990'),
            'payment_method' => 'mail_in_check',            
            'education' => 'Master',
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
            'profile_pic' => $user->gravatar_url,
            'created_at' => api_date_formate($user->created_at),
        ];

        return $this->response($result, 200);
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
                                    'day_rate_in_person' => '$101.00',
                                    'day_rate_virtual' => '$101.00',
                                    'day_rate_phone' => '$101.00',
                                    'day_rate_teleconference' => '$101.00',
                                    'expedited_hurs_inperson'  => '1', 
                                    'expedited_hurs_inperson_price'  => '$100',
                                    'expedited_hurs_virtual'  => '1', 
                                    'expedited_hurs_virtual_price'  => '$100', 
                                    'expedited_hurs_phone'  => '1', 
                                    'expedited_hurs_phone_price'  => '$100',
                                    'expedited_hurs_teleconference'  => '1', 
                                    'expedited_hurs_teleconference_price'  => '$100',
                                    'after_hour_in_person_price' => '$300',
                                    'after_hour_virtual_price' => '$100',
                                    'after_hour_phone_price' => '$150',
                                    'after_hour_teleconference_price' => '$250',
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
                                    'day_rate_in_person' => '$101.00',
                                    'day_rate_virtual' => '$101.00',
                                    'day_rate_phone' => '$101.00',
                                    'day_rate_teleconference' => '$101.00',
                                    'expedited_hurs_inperson'  => '1', 
                                    'expedited_hurs_inperson_price'  => '$100',
                                    'expedited_hurs_virtual'  => '1', 
                                    'expedited_hurs_virtual_price'  => '$100', 
                                    'expedited_hurs_phone'  => '1', 
                                    'expedited_hurs_phone_price'  => '$100',
                                    'expedited_hurs_teleconference'  => '1', 
                                    'expedited_hurs_teleconference_price'  => '$100',
                                    'after_hour_in_person_price' => '$300',
                                    'after_hour_virtual_price' => '$100',
                                    'after_hour_phone_price' => '$150',
                                    'after_hour_teleconference_price' => '$250',
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
                        'accommodation_id'  =>  2,
                        'accommodation_name' => 'Accessible Media Services',
                        'status' => 1,
                        'rate_service_wise' => 
                        [
                            [
                                'service_id'    =>  1,
                                'service_name'  =>  'Both Day Rate (New)',
                                'standerd_rates' => [
                                    'day_rate_in_person' => '$101.00',
                                    'day_rate_virtual' => '$101.00',
                                    'day_rate_phone' => '$101.00',
                                    'day_rate_teleconference' => '$101.00',
                                    'expedited_hurs_inperson'  => '1', 
                                    'expedited_hurs_inperson_price'  => '$100',
                                    'expedited_hurs_virtual'  => '1', 
                                    'expedited_hurs_virtual_price'  => '$100', 
                                    'expedited_hurs_phone'  => '1', 
                                    'expedited_hurs_phone_price'  => '$100',
                                    'expedited_hurs_teleconference'  => '1', 
                                    'expedited_hurs_teleconference_price'  => '$100',
                                    'after_hour_in_person_price' => null,
                                    'after_hour_virtual_price' => null,
                                    'after_hour_phone_price' => null,
                                    'after_hour_teleconference_price' => null,
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
                                    'day_rate_in_person' => '$101.00',
                                    'day_rate_virtual' => '$101.00',
                                    'day_rate_phone' => '$101.00',
                                    'day_rate_teleconference' => '$101.00',
                                    'expedited_hurs_inperson'  => '1', 
                                    'expedited_hurs_inperson_price'  => '$100',
                                    'expedited_hurs_virtual'  => '1', 
                                    'expedited_hurs_virtual_price'  => '$100', 
                                    'expedited_hurs_phone'  => '1', 
                                    'expedited_hurs_phone_price'  => '$100',
                                    'expedited_hurs_teleconference'  => '1', 
                                    'expedited_hurs_teleconference_price'  => '$100',
                                    'after_hour_in_person_price' => null,
                                    'after_hour_virtual_price' => null,
                                    'after_hour_phone_price' => null,
                                    'after_hour_teleconference_price' => null,
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
                        'accommodation_id'  =>  3,
                        'accommodation_name' => 'Film Production',
                        'status' => 1,
                        'rate_service_wise' => 
                        [
                            [
                                'service_id'    =>  1,
                                'service_name'  =>  'Both Day Rate (New)',
                                'standerd_rates' => [
                                    'day_rate_in_person' => '$101.00',
                                    'day_rate_virtual' => '$101.00',
                                    'day_rate_phone' => '$101.00',
                                    'day_rate_teleconference' => '$101.00',
                                    'expedited_hurs_inperson'  => '1', 
                                    'expedited_hurs_inperson_price'  => '$100',
                                    'expedited_hurs_virtual'  => '1', 
                                    'expedited_hurs_virtual_price'  => '$100', 
                                    'expedited_hurs_phone'  => '1', 
                                    'expedited_hurs_phone_price'  => '$100',
                                    'expedited_hurs_teleconference'  => '1', 
                                    'expedited_hurs_teleconference_price'  => '$100',
                                    'after_hour_in_person_price' => null,
                                    'after_hour_virtual_price' => null,
                                    'after_hour_phone_price' => null,
                                    'after_hour_teleconference_price' => null,
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
                                    'day_rate_in_person' => '$101.00',
                                    'day_rate_virtual' => '$101.00',
                                    'day_rate_phone' => '$101.00',
                                    'day_rate_teleconference' => '$101.00',
                                    'expedited_hurs_inperson'  => '1', 
                                    'expedited_hurs_inperson_price'  => '$100',
                                    'expedited_hurs_virtual'  => '1', 
                                    'expedited_hurs_virtual_price'  => '$100', 
                                    'expedited_hurs_phone'  => '1', 
                                    'expedited_hurs_phone_price'  => '$100',
                                    'expedited_hurs_teleconference'  => '1', 
                                    'expedited_hurs_teleconference_price'  => '$100',
                                    'after_hour_in_person_price' => null,
                                    'after_hour_virtual_price' => null,
                                    'after_hour_phone_price' => null,
                                    'after_hour_teleconference_price' => null,
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
     *  Desc: Store or Update User Address Api Call
     *  Dev:  Sakhawat Kamran
     *  @return \Illuminate\Http\Response
     */
     public function storeUserAddress(Request $request)
    {
        try{
            $validate = $this->vallidateApi(
                $request,
                [
                    'address_title' => 'required',
                    'address' => 'required',
                    'latitude' => 'required',
                    'longitude' => 'required',
                    'city' => 'required',
                    'state' => 'required',
                    'country' => 'required',
                    'zip_code' => 'required',
                ]
            );
            if($validate !== true )
            {
                return $validate;
            }   

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
