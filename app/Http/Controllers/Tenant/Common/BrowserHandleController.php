<?php

namespace App\Http\Controllers\Tenant\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant\LoginAddress;
class BrowserHandleController extends Controller
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
        try{
            $browser = get_browser_name($_SERVER['HTTP_USER_AGENT']);
            $ipAdd   = get_ip_address();
            $saveBrowser = LoginAddress::where('user_id',auth()->user()->id)->first();
            if(!$saveBrowser)
            {
            $saveBrowser = new LoginAddress();
            }
            $saveBrowser->user_id = auth()->user()->id;
            $saveBrowser->browser = $browser;
            $saveBrowser->ip_address = $ipAdd;
            $saveBrowser->save();
            $response['message'] = __('lang.browser_add_success');
            return $this->response($response,200);
      
            
         } catch (\Exception $e) {
            $response['message']  = $e->getMessage();
            return $this->response($response,400);
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
