<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class CommitteeMember extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'committee_id',
        'first_name',
        'last_name',
        'designation',
        'date_of_birth',
        'profile_picture',
        'email',
        'telephone_number'
    ];

    protected $hidden = [];
}
