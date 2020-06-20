<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserSettingsController extends Controller
{
    public function show()
    {
        return view('tenant.settings.user', [
            'user' => auth()->user(),
        ]);
    }

    public function personal(Request $request)
    {
        $validated = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',
                        Rule::unique('tenant.users')->ignore(auth()->user()),
                        Rule::unique('central.tenants')->ignore(tenant())], // todo write tests for this
        ]);

        /** @var User $user */
        $user = auth()->user();

        $user->update($validated);

        return redirect()->back()->with('success', 'Personal information updated.');
    }

    public function password(Request $request)
    {
        $validated = $this->validate($request, [
            'password' => 'required|password',
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        /** @var User $user */
        $user = auth()->user();

        $user->update([
            'password' => bcrypt($validated['new_password']),
        ]);

        return redirect()->back()->with('success', 'Password updated.');
    }
}
