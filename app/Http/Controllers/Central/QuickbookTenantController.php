<?php

namespace App\Http\Controllers\central;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use App\Models\Tenant\Domain;
use App\Models\Tenant\Qbauthdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Trig\Tangent;
use QuickBooksOnline\API\DataService\DataService;
use Laravel\Dusk\Browser;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;

class QuickbookTenantController extends Controller
{

    function quickbooks(Request $request) {
        // Start QB data store in qbauthdetails table
        $explodeState = explode('/', $request->state);
        $domain = $explodeState[0];
        $tenantId = $explodeState[1];
        $dataService = DataService::Configure([
            'auth_mode' => 'oauth2',
            'ClientID' => 'AB9hIKwPY2It8mBL5iYuG6xPU3Dwt6jMnDXCE8KrHWtxBi7NHD',
            'ClientSecret' => '77T6t56aCx14GR5nzS40B4cF0CumhWIM7EgoU7tX',
            'RedirectURI' => 'http://localhost:8000/quickbooks',
            'scope' => 'com.intuit.quickbooks.accounting',
            'baseUrl' => 'development',
        ]);
        $OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();
        $authUrl = $OAuth2LoginHelper->getAuthorizationCodeURL();
        $accessToken = $OAuth2LoginHelper->exchangeAuthorizationCodeForToken($request->code, $request->realmId);
        $qbData = [
            'user_id' => 1,
            'access_token' => $accessToken->getAccessToken(),
            'refresh_token' => $accessToken->getRefreshToken(),
            'realm_id' => $request->realmId,
        ];
        Config::set('database.connections.business.database', 'tenant'.$tenantId);
        DB::connection('business')->table('qbauthdetails')->insert($qbData);
        // End QB data store in qbauthdetails table
        echo "<script>alert('successfully added.')</script>";
        echo "<script>setInterval(window.close(), 100000);</script>";
    }
}
