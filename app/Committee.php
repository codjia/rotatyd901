<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Committee extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'committee_name', 'about', 'created_at', 'updated_at', 'deleted_at'
    ];

    protected $hidden = [

    ];
}
