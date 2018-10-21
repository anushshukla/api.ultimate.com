<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivities extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'database', 'table', 'action', 'field', 'activity', 'user_id', 'initiator'
    ];
}
