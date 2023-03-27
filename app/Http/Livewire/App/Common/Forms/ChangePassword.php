<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use ZxcvbnPhp\Zxcvbn;
use Livewire\Component;

class ChangePassword extends Component
{
	public $current_password;
	public string $password = '';
	public $password_confirmation;
	public $hidePassword = true;

	public string $passwordStrength = 'Weak';
	public int $strengthScore = 0;

	public array $strengthLevels = [
		1 => 'Weak',
		2 => 'Fair',
		3 => 'Good',
		4 => 'Strong',
	];

	protected $messages = [
		'password.regex' => 'Password must have at least one uppercase letter, one number and one special character.',
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

	public function updatedPassword($value)
	{
		$this->strengthScore = (new Zxcvbn())->passwordStrength($value)['score'];
	}
	
	public function generatePassword(): void
	{
		$lowercase = range('a', 'z');
		$uppercase = range('A', 'Z');
		$digits = range(0,9);
		$special = ['!', '@', '#', '$', '%', '^', '*'];
		$chars = array_merge($lowercase, $uppercase, $digits, $special);
		$length = 8;

		do {
			$password = array();

			for ($i = 0; $i <= $length; $i++) {
				$int = rand(0, count($chars) - 1);
				array_push($password, $chars[$int]);
			}

		} while (empty(array_intersect($special, $password)));

		$generatedPassword = implode('', $password);
		$this->setPasswords($generatedPassword);
		$this->updatedPassword($generatedPassword);
		$this->hidePassword = false;
	}

	public function setPasswords($value)
	{
		$this->password = $value;
		$this->password_confirmation = $value;
	}

	private function resetFields()
	{
		$this->current_password = '';
		$this->password = '';
		$this->password_confirmation = '';
		$this->strengthScore = 0;
	}

	public function render()
	{
		return view('livewire.app.common.forms.change-password');
	}
}
