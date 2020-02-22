<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Public_photo extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'url','created_at', 'updated_at', 'deleted_at'
    ];

    protected $hidden = [];
}
