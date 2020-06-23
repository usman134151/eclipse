<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationSettingsController extends Controller
{
    public function show()
    {
        return view('tenant.settings.application');
    }

    public function storeConfiguration(Request $request)
    {
        $validated = $this->validate($request, [
            'company' => 'required|string|max:255',
        ]);

        tenant()->update($validated);

        return redirect()->back()->with('success', 'Configuration updated.');
    }

    public function setPrimaryDomain(Request $request)
    {
        
    }

    public function storeDomain(Request $request)
    {
        
    }

    public function destroyDomain()
    {
        
    }

    public function setDefaultPaymentMethod(Request $request)
    {
        
    }

    public function setSubscription(Request $request)
    {
        
    }
}
