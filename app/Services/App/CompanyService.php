<?php
namespace app\Services\App;

use App\Models\Company;
use App\Models\Tenant\Phone;
use App\Models\Tenant\UserAddress;
class CompanyService{

    public function createCompany($company,$phones,$userAddresses){
        $company->save();
        foreach ($phones as $phoneData) {
            if(key_exists('id',$phoneData)){
                Phone::where('id', $phoneData['id'])->update(['phone_number' =>$phoneData['phone_number'], 'phone_title' => $phoneData['phone_title']]);

            }
            else{
                $phone = new Phone($phoneData);
                $company->phones()->save($phone);
            }

        }
        $this->saveAddresses($company,$userAddresses);
        return $company;
    }

    public function saveAddresses($company,$addresses){
        foreach($addresses as $address){
                 $address=new UserAddress($address);
                 $address->user_address_type=2;
                 $address->user_id=$company->id;
                 $address->save();
            }
     }
    

    public function getCompanyDetails($id){
       return Company::with(['phones','addresses'])->find($id); 
    }
}
