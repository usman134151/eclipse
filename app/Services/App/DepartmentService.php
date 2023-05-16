<?php
namespace app\Services\App;
use App\Models\Department;

class DepartmentService{

    public function createDeparment($department){
        $department->save();
        return $department;
    }
}
