<?php
namespace app\Services\App;

use App\Models\Tenant\AdminTeam;

class AdminTeamService{

    public function createAdminTeam($team){
        $team->save();
        return $team;
    }
}
