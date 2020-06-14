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
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(auth()->user())],
        ]);

        /** @var User $user */
        $user = auth()->user();

        $user->update($validated);

        return redirect()->back()->with('success', 'Personal information updated.');
    }

    public function password(Request $request)
    {
        $validated = $this->validate($request, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        /** @var User $user */
        $user = auth()->user();

        $user->update($validated);

        return redirect()->back()->with('success', 'Password updated.');
    }
}
