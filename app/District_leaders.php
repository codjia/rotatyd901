<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District_leaders extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'club',
        'designation',
        'email',
        'telephone',
       'picture',
        'created_at',
        'updated_at'
    ];
}
