<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBacks extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'feedback_type', 'user_end', 'page_issue_at', 'feedback', 'jira_response', 'status', 'user_name', 'issue_id',
    ];
}
