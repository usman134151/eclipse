<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use App\Tenant;
use Illuminate\Http\Request;

class RegisterTenantController extends Controller
{
    public function show()
    {
        return view('central.tenants.register');
    }

    public function submit(Request $request)
    {
        $data = $this->validate($request, [
            'domain' => 'required|string|unique:domains',
            'company' => 'required|string|max:255',
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|confirmed|max:255',
        ]);

        $data['password'] = bcrypt($data['password']);
        
        $domain = $data['domain'];
        unset($data['domain']);

        $tenant = Tenant::create($data + [
            'ready' => false,
        ]);
        $tenant->createDomain([
            'domain' => $domain
        ])->makePrimary();

        $token = tenancy()->impersonate($tenant, 1, $tenant->route('tenant.home'))->token;

        return redirect(
            $tenant->route('tenant.impersonate', ['token' => $token])
        );
    }
}
