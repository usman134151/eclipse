<?php
namespace app\Services\App;
use App\Models\Department;
use App\Models\Tenant\Phone;
use App\Models\Tenant\UserAddress;

class DepartmentService{

    public function createDeparment($department,$phones,$userAddresses){
        $department->save();
        foreach ($phones as $phoneData) {
            if (key_exists('id', $phoneData)) {
                Phone::where('id', $phoneData['id'])->update(['phone_number' => $phoneData['phone_number'], 'phone_title' => $phoneData['phone_title']]);
            } else {
                $phone = new Phone($phoneData);
                $department->phones()->save($phone);
            }
        }
        $this->saveAddresses($department, $userAddresses);

    
        return $department;
    }
    public function saveAddresses($department, $addresses)
    {
        foreach ($addresses as $addressData) {
            $addressAttributes = [
                'user_address_type' => 3,
                'user_id' => $department->id,
            ];

            UserAddress::updateOrCreate($addressData, $addressAttributes);
        }
    }
}
