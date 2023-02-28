<?php

namespace App\Http\Controllers\Tenant\Api;

use App\Http\Controllers\Tenant\Api\ApiController;
use Illuminate\Http\Request;

class SettingController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = [
            'background_status'     => 0,
            'availability_status'   => 0,
            'allow_notification'   => 0,
        ];
        ###mail_in_check,direct_bank_deposit 
        $result['payment_method'] = 'mail_a_check';
        $result['profile_address'] = [
            'id'             => 1,
            'address_line_1' => 'National Library of Australia, attraction, Canberra, Australia',
            'latitude'       => '-35.29648635',
            'longitude'      => '149.12951134999997',
           ];
        $result['address'] = null;
        $result['bank_name'] = null;    
        $result['routing_number'] = null;    
        $result['account_number'] = null;    
        return $this->response($result, 200);
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
    public function update(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'background_status' => 'required',
                    'availability_status' => 'required',
                    'allow_notification' => 'required',
                    'payment_method'    =>  'required'
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            }  
            if($request->payment_method == 'mail_in_check')
            {
                $validate = $this->vallidateApi(
                    $request,
                    [
                        'address_id' => 'required',
                        'address' => 'required',
                        'latitude' => 'required',
                        'longitude'    =>  'required'
                    ]
                );
                if($validate   !== true )
                {
                    return $validate;
                }   
            }else{
                $validate = $this->vallidateApi(
                    $request,
                    [
                        'bank_number' => 'required',
                        'routing_number' => 'required',
                        'account_number' => 'required'
                    ]
                );
                if($validate   !== true )
                {
                    return $validate;
                } 
            }

            //Todo Update Work
            
            $result = [
                'background_status'     => 1,
                'availability_status'   => 1,
                'allow_notification'   => 1,
            ];
            $result['payment_method'] = 'mail_a_check';
            $result['profile_address'] = [
                'id'             => 1,
                'address_line_1' => 'National Library of Australia, attraction, Canberra, Australia',
                'latitude'       => '-35.29648635',
                'longitude'      => '149.12951134999997',
            ];
            $result['address'] = null;
            $result['bank_name'] = null;    
            $result['routing_number'] = null;    
            $result['account_number'] = null; 
            return $this->response($result, 304);
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }    
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
