<?php

namespace App\Http\Controllers\Tenant\Api;

use App\Http\Controllers\Tenant\Api\ApiController;
use Illuminate\Http\Request;

class InvoiceController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
           

            //Todo Update Work
            $result['reimbursement'] = [
                $this->reimbursementDataMap(1),
                $this->reimbursementDataMap(2),
            ];
            
            $result['remittance'] = [
                $this->invoiceDataMap(1),
                $this->invoiceDataMap(2),
            ];

            $result['invoice_generator'] = [
                $this->invoiceGenerateDataMap(1),
                $this->invoiceGenerateDataMap(2),
            ];

            

            return $this->response($result,200);
            
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'booking_ids' => 'required',
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            }  

            $result = [
                'invoice_id' =>  1,
                'invoice_no' =>  'INP-73-23-0001',
                'created_at' =>  api_date_formate(date('Y-m-d h:ia')),
                'payment_at' =>  api_date_formate(date('Y-m-d h:ia')),
            ];
            $result['booking'] = [
                $this->invoiceGenerateDataMap(1),
                $this->invoiceGenerateDataMap(2),
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
                    'booking_ids' => 'required',
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            }  

            $result = [
                'invoice_id' =>  1,
                'invoice_no' =>  'INP-73-23-0001',
                'created_at' =>  api_date_formate(date('Y-m-d h:ia')),
                'payment_at' =>  api_date_formate(date('Y-m-d h:ia')),
                'invoice_url' =>  'https://www.pakainfo.com/wp-content/uploads/2021/09/sample-image-url-for-testing-300x169.jpg',
            ];
            return $this->response($result,663);
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
