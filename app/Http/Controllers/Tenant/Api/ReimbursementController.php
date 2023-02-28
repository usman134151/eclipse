<?php

namespace App\Http\Controllers\Tenant\Api;

use App\Http\Controllers\Tenant\Api\ApiController;
use Illuminate\Http\Request;

class ReimbursementController extends ApiController
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
        try {
            $result = array();
            $result['provider'] = [
                        'user_id'   =>  1,
                        'user_name' =>  'Thamous Charly',
                ];

            $result['assignments'] = [
                $this->assignmentsDataMap(1),
                $this->assignmentsDataMap(2),
                $this->assignmentsDataMap(3),
                $this->assignmentsDataMap(4),
                $this->assignmentsDataMap(5)
            ];    

            return $this->response($result,200);
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'provider_id' => 'required',
                    'assignment_id' => 'required',
                    'reason_type' => 'required',
                    'reason_value' => 'required',
                    'document' => 'required',
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            } 
            $result = array();
            return $this->response($result,660);
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
