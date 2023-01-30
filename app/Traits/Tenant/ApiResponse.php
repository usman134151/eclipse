<?php
namespace App\Traits\Tenant;
/**
 *  Des: Api Response 
 *  Dev: Sakhawat Kamran
 */

use App\Models\Tenant\ApiNotifications;

trait ApiResponse
{
    public function response( $data = [] , $status_code = 200 )
    {
        $notification = ApiNotifications::find($status_code);
        $response['message'] = $notification->message;
        $response['title'] = $notification->title;
        $response['message'] = $notification->message;
        $response['btn_link'] = $notification->btn_link;
        $response['btn_cancel'] = $notification->btn_cancel;
        $response['status_code']  =   $status_code = ($notification->base_code) ? $notification->base_code : $status_code ;
        $response['result'] = $data;
        return response()->json($response , $status_code );
    }
}
