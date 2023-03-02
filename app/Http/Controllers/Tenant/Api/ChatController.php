<?php

namespace App\Http\Controllers\Tenant\Api;

use Illuminate\Http\Request;
use App\Services\ChatService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Tenant\Api\ApiController;

class ChatController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user(); 
        $result = ChatService::chatRoom($user);
        return $this->response($result, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inbox(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'user_id' => 'required',
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            }  

            //Todo Update Work

            $user = Auth::user(); 
            if($request->room_id)
            $result = ChatService::chatMessages($user);
            else
            $result = ChatService::chatRoomCreate($user);
            return $this->response($result, 200);
            
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
                    'room_id' => 'required',
                    'user_id' => 'required',
                    'message' => 'required',
                ]
            );
            if($validate   !== true )
            {
                return $validate;
            }  

            //Todo Update Work

            $user = Auth::user(); 
            $result = ChatService::message($user);
            return $this->response($result, 200);
            
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
