<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clubs extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'club_name', 'venue', 'latitude', 'longitude', 'meeting_days', 'meeting_time', 'address', 'city', 'created_at', 'updated_at', 'deleted_at'
    ];

    protected $hidden = [];

}
