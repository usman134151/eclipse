<?php
namespace app\Services\App;

use App\Models\Company;

class CompanyService{

    public function createCompany($company){
        $company->save();
        return $company;
    }
}