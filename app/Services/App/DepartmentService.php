<?php
namespace app\Services\App;
use App\Models\Department;
use App\Models\Tenant\Phone;
class DepartmentService{

    public function createDeparment($department,$phones){
        $department->save();
        foreach ($phones as $phoneData) {
            $phone = new Phone($phoneData);
            $department->phones()->save($phone);
        }
        return $department;
    }
}
