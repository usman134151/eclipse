<?php

namespace App\Http\Livewire\App\Admin;

use App\Models\Tenant\Qbauthdetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Http\Response;
use Livewire\Component;
use QuickBooksOnline\API\DataService\DataService;

// use QuickBooksOnline\API\DataService\DataService;
class Quickbook extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        $authUrl = '';

        //Check QB connection status
        $chkQbAuth = Qbauthdetail::where("user_id", Auth::user()->id)->first();

        if($chkQbAuth == null) {
            //Start QB connection
            $getDomainExplode = explode('.', Request::getHost());
            $getDomainName = $getDomainExplode[0];
            $getDomainData = DB::connection('central')->table('domains')->select('domain', 'tenant_id')->where('domain', $getDomainName)->first();
            $dataService = DataService::Configure([
                'authorizationRequestUrl' => env('QBAUTHORIZATIONREQUESTURL'),
                'tokenEndPointUrl' => env('QBTOKENENDPOINTURL'),
                'auth_mode' => env('QBAUTHMODE'),
                'ClientID' => env('QBCLIENTID'),
                'ClientSecret' => env('QBCLIENTSECRET'),
                'RedirectURI' => env('QBREDIRECTURI'),
                'scope' => env('QBSCOPE'),
                'baseUrl' => env('QBBASEURL'),
                'state' => (string) $getDomainData->domain.'/'.$getDomainData->tenant_id
            ]);
            $OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();
            $authUrl = $OAuth2LoginHelper->getAuthorizationCodeURL();
            $error = $dataService->getLastError();
            //End QB connection
        }
        return view('livewire.app.admin.quickbook', compact('authUrl', 'chkQbAuth'));
    }

    public function mount()
    {


    }

    function showForm()
    {
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}
