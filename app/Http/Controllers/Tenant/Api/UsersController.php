<?php

namespace App\Http\Controllers\Tenant\Api;

use App\Http\Controllers\Tenant\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
                    ],
                    [
                        'accommodation_id'  =>  1,
                        'accommodation_name' => 'Sign And Language Interpreting Services',
                        'status' => 1,
                    ],
                    [
                        'accommodation_id'  =>  1,
                        'accommodation_name' => 'Sign And Language Interpreting Services',
                        'status' => 1,
                    ]
                ],    
                'rate_service_wise' => 
                [
                    [
                        'service_id'    =>  1,
                        'service_name'  =>  'Both Day Rate (New)',
                        'standerd_rates' => [
                            [
                                'rate_type' => 'in-person',
                                'day_rate_price' => '$500.00',
                                'expedited_rate_hours' => 1,
                                'expedited_rate_price' => '$5.00',
                            ],
                            [
                                'rate_type' => 'virtual',
                                'day_rate_price' => '$500.00',
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
                                'expedited_rate_hours' => 1,
                                'expedited_rate_price' => '$5.00',
                            ],
                            [
                                'rate_type' => 'virtual',
                                'day_rate_price' => '$500.00',
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
                            ],
                            [
                                'specialization_id'     =>  2,
                                'specialization_type'   =>  'Conferance',
                                'in_person_rate'        =>  '$30',
                                'virtual_rate'          =>  '$20',
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
}
