<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\User;
use App\Traits\Tenant\ForgetPasswordMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use ZxcvbnPhp\Zxcvbn;
use Livewire\Component;

class ChangePassword extends Component
{
	use ForgetPasswordMail;

	public $current_password;
	public string $password = '';
	public $password_confirmation;
	public $hidePassword = true;
	public $isModal = false , $userid; //to enable password reset for users 


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

	public function mount($userid=null){
		if($this->isModal){
			$this->userid = $userid;	//admin changing password of some other user
		}else
		$this->userid=Auth::user()->id;	//self password change
	}

	public function changePassword()
	{
		$user = User::findOrFail($this->userid);
		$rules=[
			'password' => [
				'required',
				'string',
				'min:8',
				'regex:/[A-Z]/', // Must have at least one uppercase letter
				'regex:/[0-9]/', // Must have at least one number
				'regex:/[!@#$%^&*(),.?":{}|<>]/', // Must have at least one special character
				'confirmed',
				],
			'password_confirmation'=>['required_with:password','same:password']
		];

		if(!$this->isModal){	//removing current password check if component called from modal
			$rules['current_password'] = ['required', function ($attribute, $value, $fail) use ($user) {
										if (!Hash::check($value, $user->password)) {
											return $fail(__('The current password is incorrect.'));
										}
									}];
		}
		// dd($user,$rules);
		$this->validate($rules);
		
		if(Hash::check($this->current_password, $user->password)||$this->isModal)
		{
			$user->password = Hash::make($this->password);
			$user->save();

			if ($this->isModal)
			$this->emit('passwordmodalDismissed');

			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => 'Password updated successfully!',
			]);
            $this->changePasswordMail($user);
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

			for ($i = 0; $i < $length; $i++) {
				$int = rand(0, count($chars) - 1);
				array_push($password, $chars[$int]);
			}

		} while (empty(array_intersect($special, $password)) || empty(array_intersect($uppercase, $password)) || empty(array_intersect($digits, $password)));

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
		if($this->isModal)
		return view('livewire.app.common.modals.change-password');	//open in modal for admin
		else
		return view('livewire.app.common.forms.change-password'); //self change
	}
}
