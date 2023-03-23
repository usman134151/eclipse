<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{
	public $current_password;
	public $password;
	public $password_confirmation;

	protected $messages = [
		'password.regex' => 'Password must have at least one uppercase letter, one number and one special character ',
	];

	public function changePassword()
	{
		$user = User::findOrFail(Auth::user()->id);
		$this->validate([
			'current_password' => ['required', function ($attribute, $value, $fail) use ($user) {
				if (!Hash::check($value, $user->password)) {
					return $fail(__('The current password is incorrect.'));
				}
			}],
			'password' => [
				'required',
				'string',
				'min:8',
				'regex:/[A-Z]/', // Must have at least one uppercase letter
				'regex:/[0-9]/', // Must have at least one number
				'regex:/[!@#$%^&*(),.?":{}|<>]/', // Must have at least one special character
				'confirmed',
			],
		]);
		
		if(Hash::check($this->current_password, $user->password))
		{
			$user->password = Hash::make($this->password);
			$user->save();
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => 'Password updated successfully!',
			]);
			$this->resetFields();
		}
	}

	private function resetFields()
	{
		$this->current_password = '';
		$this->password = '';
		$this->password_confirmation = '';
	}

	public function render()
	{
		return view('livewire.app.common.forms.change-password');
	}
}
