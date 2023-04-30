<?php
namespace app\Services\App;

use App\Models\Company;
use App\Models\Tenant\Phone;
class CompanyService{

    public function createCompany($company,$phones){
        $company->save();
        foreach ($phones as $phoneData) {
            $phone = new Phone($phoneData);
            $company->phones()->save($phone);
        }
        return $company;
    }

    public function getCompanyDetails($id){
       return Company::with('phones')->find($id); 
    }
}
