<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Executivedirector extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'designation',
        // 'date_of_birth',
        'profile_picture',
        'email',
        'telephone_number', 'created_at', 'updated_at', 'deleted_at'
    ];

    protected $hidden = [];
}
