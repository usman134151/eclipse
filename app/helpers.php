<?php

use App\Models\Tenant\Logs;
use App\Models\Tenant\SystemRoleUser;

use App\PloiManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

if (!function_exists('ploi')) {
    function ploi(): PloiManager
    {
        return app(PloiManager::class);
    }
}
if (!function_exists('userPermissions')) {
    function userPermissions()
    {
        $system_role_users = SystemRoleUser::where('user_id', auth()->user()->id)->get();
        $combinedSectionRights = collect();
        foreach ($system_role_users as $system_role_user) {
            $sectionRights = $system_role_user->systemRole->sectionRights()->get([
                'system_role_id',
                'section_id',
                'right_id'
            ]);
            $combinedSectionRights = $combinedSectionRights->merge($sectionRights);
        }
        return $combinedSectionRights;
    }
}

if (!function_exists('userHasPermission')) {
    function userHasPermission($section_id, $right_id)
    {
        // $isSuperAdmin=Session::get('isSuperAdmin');
        if (auth()->user()->id == 1) {
            return true;
        }
        $userPermissions = Session::get('userPermissions');
        if ($userPermissions) {
            foreach ($userPermissions as $item) {
                if (($item['section_id'] === $section_id && $item['right_id'] === $right_id) || ($item['section_id'] === $section_id && $item['right_id'] == 5)) {
                    return true; // Found a matching record, return true
                }
            }
        }
        return false; // No matching record found, return false
    }
}


if (!function_exists('addLogs')) {
    function addLogs($data)
    {
        // try {
            Logs::create([
                'action_by'     => $data['action_by'],
                'action_to'     => $data['action_to'],
                'item_type'     => $data['item_type'],
                'type'                 => isset($data['type']) ? $data['type'] : '',
                'message'         => $data['message'],
                'ip_address'     => \request()->ip(),
                'request_from' => isset($data['request_from']) ? $data['request_from'] : '',
                'request_to'    => isset($data['request_to']) ? $data['request_to'] : ''
            ]);
            return true;
        // } catch (\Exception $e) {
        //     return;
            //  Redirect::back()->send()->with(['error_message' => 'There is something wrong.Please try again later.']);
        // }
    }
}
