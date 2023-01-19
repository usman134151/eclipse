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
        $invoiceData = [
            [
                'invoice_id'        =>  1,
                'invoice_no'        =>  '0001',
                'total_pay'         => '$ 758',
                'issued_date'       =>  '12/20/2022',
                'scheduled_payement_date'=> '12/20/2022',
                'paid_at'           => '12/20/2022',
                'payment_method'    =>  'credit_card',
                'payment_status'    =>  'pending',
                'created_at'        => '12/18/2022',
                'updated_at'        => '12/20/2022'
            ],
            [
                'invoice_id'        =>  1,
                'invoice_no'        =>  '0001',
                'total_pay'         => '$ 758',
                'issued_date'       =>  '12/20/2022',
                'scheduled_payement_date'=> '12/20/2022',
                'paid_at'           => '12/20/2022',
                'payment_method'    =>  'credit_card',
                'payment_status'    =>  'pending',
                'created_at'        => '12/18/2022',
                'updated_at'        => '12/20/2022'
            ],
            [
                'invoice_id'        =>  1,
                'invoice_no'        =>  '0001',
                'total_pay'         => '$ 758',
                'issued_date'       =>  '12/20/2022',
                'scheduled_payement_date'=> '12/20/2022',
                'paid_at'           => '12/20/2022',
                'payment_method'    =>  'credit_card',
                'payment_status'    =>  'pending',
                'created_at'        => '12/18/2022',
                'updated_at'        => '12/20/2022'
            ],
            [
                'invoice_id'        =>  1,
                'invoice_no'        =>  '0001',
                'total_pay'         => '$ 758',
                'issued_date'       =>  '12/20/2022',
                'scheduled_payement_date'=> '12/20/2022',
                'paid_at'           => '12/20/2022',
                'payment_method'    =>  'credit_card',
                'payment_status'    =>  'pending',
                'created_at'        => '12/18/2022',
                'updated_at'        => '12/20/2022'
            ],
            [
                'invoice_id'        =>  1,
                'invoice_no'        =>  '0001',
                'total_pay'         => '$ 758',
                'issued_date'       =>  '12/20/2022',
                'scheduled_payement_date'=> '12/20/2022',
                'paid_at'           => '12/20/2022',
                'payment_method'    =>  'credit_card',
                'payment_status'    =>  'pending',
                'created_at'        => '12/18/2022',
                'updated_at'        => '12/20/2022'
            ],
            [
                'invoice_id'        =>  1,
                'invoice_no'        =>  '0001',
                'total_pay'         => '$ 758',
                'issued_date'       =>  '12/20/2022',
                'scheduled_payement_date'=> '12/20/2022',
                'paid_at'           => '12/20/2022',
                'payment_method'    =>  'credit_card',
                'payment_status'    =>  'pending',
                'created_at'        => '12/18/2022',
                'updated_at'        => '12/20/2022'
            ],
            [
                'invoice_id'        =>  1,
                'invoice_no'        =>  '0001',
                'total_pay'         => '$ 758',
                'issued_date'       =>  '12/20/2022',
                'scheduled_payement_date'=> '12/20/2022',
                'paid_at'           => '12/20/2022',
                'payment_method'    =>  'credit_card',
                'payment_status'    =>  'pending',
                'created_at'        => '12/18/2022',
                'updated_at'        => '12/20/2022'
            ],
            [
                'invoice_id'        =>  1,
                'invoice_no'        =>  '0001',
                'total_pay'         => '$ 758',
                'issued_date'       =>  '12/20/2022',
                'scheduled_payement_date'=> '12/20/2022',
                'paid_at'           => '12/20/2022',
                'payment_method'    =>  'credit_card',
                'payment_status'    =>  'pending',
                'created_at'        => '12/18/2022',
                'updated_at'        => '12/20/2022'
            ],
            [
                'invoice_id'        =>  1,
                'invoice_no'        =>  '0001',
                'total_pay'         => '$ 758',
                'issued_date'       =>  '12/20/2022',
                'scheduled_payement_date'=> '12/20/2022',
                'paid_at'           => '12/20/2022',
                'payment_method'    =>  'credit_card',
                'payment_status'    =>  'pending',
                'created_at'        => '12/18/2022',
                'updated_at'        => '12/20/2022'
            ]
        ];
        return $this->response($invoiceData,200);
        
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

    /***
     * List of Reimbursements Of Provider
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reimbursements(Request $request)
    {
        $reimbursementData = [
            [
                'reimburs_id'    =>  1,
                'reimburs_no'    =>  '1',
                'booking_number'=>  '101787-2',
                'reason'        =>  'This is test recode for reason description',
                'document'      =>  'https://production-qa.eclipsescheduling.com/storage/uploads/pdf/fa581e80-c430-4bc9-9e57-5c6d5d3bea98.pdf',
                'amount'        =>  '$ 840.00',
                'status'        =>  'Pending',
                'payment_status'=>  'Underreview',
                'issued'        =>  '12/20/2022',
                'paid'          =>  'Yes',
                'payment_method'=>  'cridet_card',
                'created_at'    =>  '12/16/2022',
                'updated_at'    =>  '12/16/2022'
            ],
            [
                'reimburs_id'    =>  1,
                'reimburs_no'    =>  '1',
                'booking_number'=>  '101787-2',
                'reason'        =>  'This is test recode for reason description',
                'document'      =>  'https://production-qa.eclipsescheduling.com/storage/uploads/pdf/fa581e80-c430-4bc9-9e57-5c6d5d3bea98.pdf',
                'amount'        =>  '$ 840.00',
                'status'        =>  'Pending',
                'payment_status'=>  'Underreview',
                'issued'        =>  '12/20/2022',
                'paid'          =>  'Yes',
                'payment_method'=>  'cridet_card',
                'created_at'    =>  '12/16/2022',
                'updated_at'    =>  '12/16/2022'
            ],
            [
                'reimburs_id'    =>  1,
                'reimburs_no'    =>  '1',
                'booking_number'=>  '101787-2',
                'reason'        =>  'This is test recode for reason description',
                'document'      =>  'https://production-qa.eclipsescheduling.com/storage/uploads/pdf/fa581e80-c430-4bc9-9e57-5c6d5d3bea98.pdf',
                'amount'        =>  '$ 840.00',
                'status'        =>  'Pending',
                'payment_status'=>  'Underreview',
                'issued'        =>  '12/20/2022',
                'paid'          =>  'Yes',
                'payment_method'=>  'cridet_card',
                'created_at'    =>  '12/16/2022',
                'updated_at'    =>  '12/16/2022'
            ],
            [
                'reimburs_id'    =>  1,
                'reimburs_no'    =>  '1',
                'booking_number'=>  '101787-2',
                'reason'        =>  'This is test recode for reason description',
                'document'      =>  'https://production-qa.eclipsescheduling.com/storage/uploads/pdf/fa581e80-c430-4bc9-9e57-5c6d5d3bea98.pdf',
                'amount'        =>  '$ 840.00',
                'status'        =>  'Pending',
                'payment_status'=>  'Underreview',
                'issued'        =>  '12/20/2022',
                'paid'          =>  'Yes',
                'payment_method'=>  'cridet_card',
                'created_at'    =>  '12/16/2022',
                'updated_at'    =>  '12/16/2022'
            ],
            [
                'reimburs_id'    =>  1,
                'reimburs_no'    =>  '1',
                'booking_number'=>  '101787-2',
                'reason'        =>  'This is test recode for reason description',
                'document'      =>  'https://production-qa.eclipsescheduling.com/storage/uploads/pdf/fa581e80-c430-4bc9-9e57-5c6d5d3bea98.pdf',
                'amount'        =>  '$ 840.00',
                'status'        =>  'Pending',
                'payment_status'=>  'Underreview',
                'issued'        =>  '12/20/2022',
                'paid'          =>  'Yes',
                'payment_method'=>  'cridet_card',
                'created_at'    =>  '12/16/2022',
                'updated_at'    =>  '12/16/2022'
            ],
            [
                'reimburs_id'    =>  1,
                'reimburs_no'    =>  '1',
                'booking_number'=>  '101787-2',
                'reason'        =>  'This is test recode for reason description',
                'document'      =>  'https://production-qa.eclipsescheduling.com/storage/uploads/pdf/fa581e80-c430-4bc9-9e57-5c6d5d3bea98.pdf',
                'amount'        =>  '$ 840.00',
                'status'        =>  'Pending',
                'payment_status'=>  'Underreview',
                'issued'        =>  '12/20/2022',
                'paid'          =>  'Yes',
                'payment_method'=>  'cridet_card',
                'created_at'    =>  '12/16/2022',
                'updated_at'    =>  '12/16/2022'
            ],
            [
                'reimburs_id'    =>  1,
                'reimburs_no'    =>  '1',
                'booking_number'=>  '101787-2',
                'reason'        =>  'This is test recode for reason description',
                'document'      =>  'https://production-qa.eclipsescheduling.com/storage/uploads/pdf/fa581e80-c430-4bc9-9e57-5c6d5d3bea98.pdf',
                'amount'        =>  '$ 840.00',
                'status'        =>  'Pending',
                'payment_status'=>  'Underreview',
                'issued'        =>  '12/20/2022',
                'paid'          =>  'Yes',
                'payment_method'=>  'cridet_card',
                'created_at'    =>  '12/16/2022',
                'updated_at'    =>  '12/16/2022'
            ],
            [
                'reimburs_id'    =>  1,
                'reimburs_no'    =>  '1',
                'booking_number'=>  '101787-2',
                'reason'        =>  'This is test recode for reason description',
                'document'      =>  'https://production-qa.eclipsescheduling.com/storage/uploads/pdf/fa581e80-c430-4bc9-9e57-5c6d5d3bea98.pdf',
                'amount'        =>  '$ 840.00',
                'status'        =>  'Pending',
                'payment_status'=>  'Underreview',
                'issued'        =>  '12/20/2022',
                'paid'          =>  'Yes',
                'payment_method'=>  'cridet_card',
                'created_at'    =>  '12/16/2022',
                'updated_at'    =>  '12/16/2022'
            ]
              
        ];       
        return $this->response($reimbursementData,200);
    }
}
