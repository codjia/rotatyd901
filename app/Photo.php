<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'url', 'category_id', 'created_at', 'updated_at', 'deleted_at'
    ];

    protected $hidden = [];
}
