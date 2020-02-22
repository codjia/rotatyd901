<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anniversary extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'anniversary_name', 'anniversary_date','anniversary_desc', 'created_at', 'updated_at', 'deleted_at'
    ];

    protected $hidden = [];
}
