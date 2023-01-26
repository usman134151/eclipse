<?php

namespace App\Http\Controllers\Tenant\Api;

use App\Http\Controllers\Tenant\Api\ApiController;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Artisan;

class TestController extends ApiController
{
    public function test()
    {
        try {
            $user = Auth::user();
            return $this->response( [],200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
