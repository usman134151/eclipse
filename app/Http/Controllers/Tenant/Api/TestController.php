<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Auth;

class TestController extends ApiController
{
    public function test()
    {
        try {
            $user = Auth::user();

            return $this->response( $user->toArray(),200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
