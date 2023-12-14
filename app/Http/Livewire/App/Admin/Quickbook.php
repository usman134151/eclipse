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
        //Start check QB connection
        $chkQbAuth = Qbauthdetail::where("user_id", Auth::user()->id)->first();
        //End check QB connection
        //Start QB connection
        $getDomainExplode = explode('.', Request::getHost());
        $getDomainName = $getDomainExplode[0];
        $getDomainData = DB::connection('central')->table('domains')->select('domain', 'tenant_id')->where('domain', $getDomainName)->first();
        $dataService = DataService::Configure([
            'authorizationRequestUrl' => 'https://appcenter.intuit.com/connect/oauth2',
            'tokenEndPointUrl' => 'https://oauth.platform.intuit.com/oauth2/v1/tokens/bearer',
            'auth_mode' => 'oauth2',
            'ClientID' => 'AB9hIKwPY2It8mBL5iYuG6xPU3Dwt6jMnDXCE8KrHWtxBi7NHD',
            'ClientSecret' => '77T6t56aCx14GR5nzS40B4cF0CumhWIM7EgoU7tX',
            'RedirectURI' => 'http://localhost:8000/quickbooks',
            'scope' => 'com.intuit.quickbooks.accounting',
            'baseUrl' => 'development',
            'state' => (string) $getDomainData->domain.'/'.$getDomainData->tenant_id
        ]);
        $OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();
        $authUrl = $OAuth2LoginHelper->getAuthorizationCodeURL();
        $error = $dataService->getLastError();
        //End QB connection
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
