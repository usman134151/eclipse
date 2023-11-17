<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Schedule;
use App\Models\Tenant\ServiceSpecialization;
use App\Models\Tenant\SpecializationRate;
use App\Models\Tenant\StandardRate;
use Livewire\Component;
use App\Models\Tenant\User;
use App\Models\Tenant\UserDetail;
use App\Models\Tenant\UserLoginAddress;
use App\Services\App\UserService;

class ProviderDetails extends Component
{
	public $user, $userid, $accommodation_catalog, $service_catalog, $isProvider = false, $feedbackType = false;
	public $settings = ['travel_rate_per_unit' => '', 'travel_rate_unit' => "km", 'rate_for_travel_time' => '', 'same_as_service_rate' => '', 'provider_payroll' => false];


	// variabled for my-drive (upload-credential-file) panel 
	public  $counter = 0, $credentialId, $credentialLabel = "", $credentialDetails = false;
	public  $serviceTypes = [
        ['type' => '1', 'icon' => 'in-person', 'label' => 'In-Person', 'priceKey' => 'price'],
        ['type' => '2', 'icon' => 'virtual-service', 'label' => 'Virtual', 'priceKey' => 'price_v'],
        ['type' => '4', 'icon' => 'phone', 'label' => 'Phone', 'priceKey' => 'price_p'],
        ['type' => '5', 'icon' => 'teleconference', 'label' => 'Teleconference', 'priceKey' => 'price_t'],
    ];

	public $billingTypes = [
        '1' => ['class' => 'hour-rate', 'postfix' => 'hour_price', 'title' => 'Hour Rate'],
        '2' => ['class' => 'day-rate', 'postfix' => 'day_rate_price', 'title' => 'Day Rate'],
        '4' => ['class' => 'fixed-rate', 'postfix' => 'fixed_rate', 'title' => 'Fixed Rate'],

    ];



	protected $listeners = [
		'showDetails',
		'OpenProviderCredential', //for upload panel
		'openActiveCredentialModal',	//for document view modal
		'viewCredentialModal', // for viewing acknowledge doc
		'showConfirmation',
	];

	public function saveSettings()
	{


		// dd(json_encode($this->settings));
		UserDetail::where('user_id', $this->userid)->update(['provider_details' => json_encode($this->settings)]);
		$this->showConfirmation("Settings saved Successfully");
	}

	public function saveSchedule()
	{
		$this->emit('saveSchedule');
		//causing distortion on calendar 
		// $this->emit('refreshCalendar'); //emit to update calendar events
		$this->showConfirmation("Availability has been saved successfully");
		$this->dispatchBrowserEvent('close-default-schedule-modal');
	}

	// open panel in my-drive to upload credential 
	public function OpenProviderCredential($credentialId, $credentialLabel)
	{
		if ($this->counter == 0) {
			$this->credentialId = 0;
			$this->credentialLabel = $credentialLabel;
			$this->dispatchBrowserEvent('open-credential', ['credentialId' => $credentialId, 'credentialLabel' => $credentialLabel]);
			$this->counter = 1;
			$this->credentialDetails = true;
		} else {
			$this->credentialId = $credentialId;
			$this->counter = 0;
			$this->dispatchBrowserEvent('refreshSelects');
		}
	}

	// open view document modal from my-drive
	public function openActiveCredentialModal($user_doc_id)
	{
		$this->emit('openActiveCredential', $user_doc_id);
	}

	// open view document modal from my-drive
	public function viewCredentialModal($doc_id)
	{
		$this->emit('viewCredential', $doc_id);
	}



	// fetches basic user data, refer to Provider.php to increase relation arrays
	public function showDetails($user)
	{
		$this->user = $user;
		$this->userid = $user['id'];
		$this->user['tags'] = json_decode($this->user['userdetail']['tags']);
		if ($this->user['userdetail']['provider_details'] != null)
			$this->settings = json_decode($this->user['userdetail']['provider_details'], true);


		// accommodations and services - Service Catalogue and Rates Tab
		$query = User::query();
		$query->where('users.id', $this->userid);
		$query->join('provider_accommodation_services', function ($join) {
			$join->on('provider_accommodation_services.user_id', "users.id");
			$join->where('provider_accommodation_services.status', 1);
		});
		$query->join('accommodations', 'provider_accommodation_services.accommodation_id', "accommodations.id");
		$query->join('service_categories', 'provider_accommodation_services.service_id', "service_categories.id");

		$query->select([
			'accommodations.id as accommodation_id',
			'accommodations.name as accommodation_name',
			'service_categories.id as service_id', 'service_categories.name as service_name',
			'provider_accommodation_services.provider_priority',
			'service_categories.*'
		]);
		$this->accommodation_catalog = $query->distinct('service_id')->orderBy('provider_priority')->where('service_categories.status',1)->get()->groupBy('accommodation_id')->toArray();
		// dd($this->accommodation_catalog);
		// rate_status 1 => hourly
		// rate_status 2 => day rate
		// rate_status 4 => fixed

		foreach ($this->accommodation_catalog as $key => $accom) {

			foreach ($accom as $index => $service) {
				//check if user has has custom rates for service 


				$custom_rates = StandardRate::where(['accommodation_service_id' => $service['id'], 'user_id' => $this->userid])->first();
				if ($custom_rates) {

					//setting standard rates
					if ($service['rate_status'] == 1) {
						$this->accommodation_catalog[$key][$index]['price'] = $custom_rates['hours_price'] ? $custom_rates['hours_price'] : null;
						$this->accommodation_catalog[$key][$index]['price_p'] = $custom_rates['hours_price_p'] ? $custom_rates['hours_price_p'] : null;
						$this->accommodation_catalog[$key][$index]['price_v'] = $custom_rates['hours_price_v'] ? $custom_rates['hours_price_v'] : null;
						$this->accommodation_catalog[$key][$index]['price_t'] = $custom_rates['hours_price_t'] ? $custom_rates['hours_price_t'] : null;
					} elseif ($service['rate_status'] == 2) {
						$this->accommodation_catalog[$key][$index]['price'] = $custom_rates['day_rate_price'] ? $custom_rates['day_rate_price'] : null;
						$this->accommodation_catalog[$key][$index]['price_p'] = $custom_rates['day_rate_price_p'] ? $custom_rates['day_rate_price_p'] : null;
						$this->accommodation_catalog[$key][$index]['price_v'] = $custom_rates['day_rate_price_v'] ? $custom_rates['day_rate_price_v'] : null;
						$this->accommodation_catalog[$key][$index]['price_t'] = $custom_rates['day_rate_price_t'] ? $custom_rates['day_rate_price_t'] : null;
					} elseif ($service['rate_status'] == 4) {

						$this->accommodation_catalog[$key][$index]['price'] = $custom_rates['fixed_rate'] ? $custom_rates['fixed_rate'] : null;
						$this->accommodation_catalog[$key][$index]['price_p'] = $custom_rates['fixed_rate_p'] ? $custom_rates['fixed_rate_p'] : null;
						$this->accommodation_catalog[$key][$index]['price_v'] = $custom_rates['fixed_rate_v'] ? $custom_rates['fixed_rate_v'] : null;
						$this->accommodation_catalog[$key][$index]['price_t'] = $custom_rates['fixed_rate_t'] ? $custom_rates['fixed_rate_t'] : null;
					}
					// customer emergency rates
					if ($custom_rates['emergency_hour'])
						$this->accommodation_catalog[$key][$index]['emergency_hour'] = json_decode($custom_rates['emergency_hour'], true);
					if ($custom_rates['emergency_hour_v'])
						$this->accommodation_catalog[$key][$index]['emergency_hour_v'] = json_decode($custom_rates['emergency_hour_v'], true);
					if ($custom_rates['emergency_hour_p'])
						$this->accommodation_catalog[$key][$index]['emergency_hour_p'] = json_decode($custom_rates['emergency_hour_p'], true);
					if ($custom_rates['emergency_hour_t'])
						$this->accommodation_catalog[$key][$index]['emergency_hour_t'] = json_decode($custom_rates['emergency_hour_t'], true);
				} else {

					// use default standard rates
					if ($service['rate_status'] == 1) {
						$this->accommodation_catalog[$key][$index]['price'] = $service['hours_price'] && !session()->get('isProvider') ? $service['hours_price'] : null;
						$this->accommodation_catalog[$key][$index]['price_p'] = $service['hours_price_p'] && !session()->get('isProvider') ? $service['hours_price_p'] : null;
						$this->accommodation_catalog[$key][$index]['price_v'] = $service['hours_price_v'] && !session()->get('isProvider') ? $service['hours_price_v'] : null;
						$this->accommodation_catalog[$key][$index]['price_t'] = $service['hours_price_t'] && !session()->get('isProvider') ? $service['hours_price_t'] : null;
					} elseif ($service['rate_status'] == 2) {
						$this->accommodation_catalog[$key][$index]['price'] = $service['day_rate_price'] && !session()->get('isProvider') ? $service['day_rate_price'] : null;
						$this->accommodation_catalog[$key][$index]['price_p'] = $service['day_rate_price_p'] && !session()->get('isProvider') ? $service['day_rate_price_p'] : null;
						$this->accommodation_catalog[$key][$index]['price_v'] = $service['day_rate_price_v'] && !session()->get('isProvider') ? $service['day_rate_price_v'] : null;
						$this->accommodation_catalog[$key][$index]['price_t'] = $service['day_rate_price_t'] && !session()->get('isProvider') ? $service['day_rate_price_t'] : null;
					} elseif ($service['rate_status'] == 4) {

						$this->accommodation_catalog[$key][$index]['price'] = $service['fixed_rate'] && !session()->get('isProvider') ? $service['fixed_rate'] : null;
						$this->accommodation_catalog[$key][$index]['price_p'] = $service['fixed_rate_p'] && !session()->get('isProvider') ? $service['fixed_rate_p'] : null;
						$this->accommodation_catalog[$key][$index]['price_v'] = $service['fixed_rate_v'] && !session()->get('isProvider') ? $service['fixed_rate_v'] : null;
						$this->accommodation_catalog[$key][$index]['price_t'] = $service['fixed_rate_t'] && !session()->get('isProvider') ? $service['fixed_rate_t'] : null;
					}


					//use default emergency rates

					if ($service['emergency_hour'] && !session()->get('isProvider'))
						$this->accommodation_catalog[$key][$index]['emergency_hour'] = json_decode($service['emergency_hour'], true);
					else
						$this->accommodation_catalog[$key][$index]['emergency_hour'] = null;
					if ($service['emergency_hour_v'] && !session()->get('isProvider'))
						$this->accommodation_catalog[$key][$index]['emergency_hour_v'] = json_decode($service['emergency_hour_v'], true);
					else
						$this->accommodation_catalog[$key][$index]['emergency_hour_v'] = null;
					if ($service['emergency_hour_p'] && !session()->get('isProvider'))
						$this->accommodation_catalog[$key][$index]['emergency_hour_p'] = json_decode($service['emergency_hour_p'], true);
					else
						$this->accommodation_catalog[$key][$index]['emergency_hour_p'] = null;
					if ($service['emergency_hour_t'] && !session()->get('isProvider'))
						$this->accommodation_catalog[$key][$index]['emergency_hour_t'] = json_decode($service['emergency_hour_t'], true);
					else
						$this->accommodation_catalog[$key][$index]['emergency_hour_t'] = null;
				}
				$specializations = ServiceSpecialization::where('service_id', $service['id'])->with('specialization')->get()->toArray();

				if ($specializations)
					foreach ($specializations as $i => $s) {

						$custom_special_rates = SpecializationRate::where(['accommodation_service_id' => $service['id'], 'user_id' => $this->userid, 'specialization' => $s['specialization']['id']])->first();
						if ($custom_special_rates) {
							// check if user has specialized services
							$this->accommodation_catalog[$key][$index]['specializations'][$i]['sp'] = isset(json_decode($custom_special_rates['specialization_rate'], true)[0]['price']) ? json_decode($custom_special_rates['specialization_rate'], true)[0]['price'] : null;
							$this->accommodation_catalog[$key][$index]['specializations'][$i]['sp_v'] =  isset(json_decode($custom_special_rates['specialization_rate_v'], true)[0]['price']) ? json_decode($custom_special_rates['specialization_rate_v'], true)[0]['price'] : null;
							$this->accommodation_catalog[$key][$index]['specializations'][$i]['sp_p'] =  isset(json_decode($custom_special_rates['specialization_rate_p'], true)[0]['price']) ? json_decode($custom_special_rates['specialization_rate_p'], true)[0]['price'] : null;
							$this->accommodation_catalog[$key][$index]['specializations'][$i]['sp_t'] =  isset(json_decode($custom_special_rates['specialization_rate_t'], true)[0]['price']) ? json_decode($custom_special_rates['specialization_rate_t'], true)[0]['price'] : null;
						} else {
							$this->accommodation_catalog[$key][$index]['specializations'][$i]['sp'] = isset(json_decode($s['specialization_price'], true)[0]['price']) && !session()->get('isProvider') ? json_decode($s['specialization_price'], true)[0]['price'] : null;
							$this->accommodation_catalog[$key][$index]['specializations'][$i]['sp_v'] = isset(json_decode($s['specialization_price_v'], true)[0]['price']) && !session()->get('isProvider') ? json_decode($s['specialization_price_v'], true)[0]['price'] : null;
							$this->accommodation_catalog[$key][$index]['specializations'][$i]['sp_p'] = isset(json_decode($s['specialization_price_p'], true)[0]['price']) && !session()->get('isProvider') ? json_decode($s['specialization_price_p'], true)[0]['price'] : null;
							$this->accommodation_catalog[$key][$index]['specializations'][$i]['sp_t'] = isset(json_decode($s['specialization_price_t'], true)[0]['price']) && !session()->get('isProvider') ? json_decode($s['specialization_price_t'], true)[0]['price'] : null;
						}
						$this->accommodation_catalog[$key][$index]['specializations'][$i]['sp_price_type'] = isset(json_decode($s['specialization_price'], true)[0]['price_type']) && !session()->get('isProvider') ? json_decode($s['specialization_price'], true)[0]['price_type'] : null;
						$this->accommodation_catalog[$key][$index]['specializations'][$i]['sp_name'] = isset($s['specialization']['name']) && !session()->get('isProvider')  ? $s['specialization']['name'] : null;
					}
				else
					$this->accommodation_catalog[$key][$index]['specializations'] = null;
				// dd(json_decode($this->accommodation_catalog[$key][$index]['emergency_hour']));

			}
		}
		$lastLogin = UserLoginAddress::where('user_id', $this->userid)->orderBy('created_at', 'DESC')->first();
		if ($lastLogin)
			$this->user['last_login'] = $lastLogin->toArray();
		else
			$this->user['last_login'] = null;

		// dd($this->accommodation_catalog);
		$this->dispatchBrowserEvent('refreshSelects');
	}

	// locks user account
	public function lockAccount()
	{
		UserService::modifyAccountLockState($this->user['id'],!$this->user['status']);
		// $user = User::find($this->userid);
		// $user->status = !$user->status;
		// $user->save();
		$this->user['status']= !$this->user['status'];
		$this->showConfirmation("Account status changed Successfully");
	}

	public function showConfirmation($message = "")
	{
		if ($message) {
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
	}
	public function render()
	{
		return view('livewire.app.common.provider-details');
	}

	public function mount($user = null)
	{
		if ($user) {
			$this->showdetails($user);
		}
	}

	public function showList($userId = 1)
	{
		$user = User::find($userId);

		$this->emit('showList');
	}
	public function resendWelcomeEmail()
	{
		$user = User::find($this->user['id']);
		sendWelcomeMail($user);
		$this->showConfirmation("Welcome Email Send Successfully");
	}
}
