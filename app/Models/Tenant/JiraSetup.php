<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JiraSetup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jira_project_name', 'jira_project_description', 'jira_site_url', 'jira_username', 'api_token', 'jira_account_id', 'jira_basic_auth'
    ];
}
