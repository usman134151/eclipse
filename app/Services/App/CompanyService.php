<?php
namespace app\Services\App;

use App\Models\Company;
use App\Models\Tenant\Phone;
use App\Services\App\AddressService;

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
        $addressService = new AddressService();
        $addressService->saveAddresses($company->id,2,$userAddresses);
        return $company;
    }


    public function getCompanyDetails($id){
       return Company::with(['phones','addresses'])->find($id); 
    }
}
