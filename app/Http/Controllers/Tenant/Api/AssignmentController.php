<?php

namespace App\Http\Controllers\Tenant\Api;

use App\Http\Controllers\Tenant\Api\ApiController;
use Illuminate\Http\Request;

class AssignmentController extends ApiController
{
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
                    
                        'today_assignment'  =>  
                        [
                            $this->assignmentsDataMap(1),
                            $this->assignmentsDataMap(2),
                        ],

                        'upcomming_assignment'  =>  
                        [
                            $this->assignmentsDataMap(3),
                            $this->assignmentsDataMap(4),
                        ]                            
                
                    ];
                }else{
                    $assignmentData = [
                    
                            'assignment_invitation'  =>  
                            [
                                $this->assignmentsDataMap(1),
                                $this->assignmentsDataMap(2),
                            ],

                            'unassign_assignment'  =>  
                            [
                                $this->assignmentsDataMap(3),
                                $this->assignmentsDataMap(4),
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
                    'assignment_times' => 'required',
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            } 
            return $this->response($this->assignmentsDataMap($request->id),200);
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
    
}
