<?php
namespace app\Services\App;

use App\Models\Tenant\AdminTeam;
use App\Models\Tenant\AdminTeamStaff;

class AdminTeamService{

    public function createAdminTeam($team){
        $team->save();
        AdminTeamStaff::firstOrCreate(['admin_staff_id'=>$team->admin_id,'admin_team_id'=>$team->id],
            ['admin_staff_id' => $team->admin_id, 'admin_team_id' => $team->id]);
        return $team;
    }
}
