<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function response($data, $status = 200)
    {
        $result = [];
        $status_array = [
            200 => 'success',
            404 => 'error',
            403 => 'warning',
            400 => 'SERVER_ERROR',
        ];
        $result['status'] = isset( $status_array[$status] ) ? $status_array[$status] : $status_array[200];
        $result['result'] = $data;
        return response()->json($result);
    }
}
