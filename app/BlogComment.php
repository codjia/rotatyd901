<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class BlogComment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'blog_id',
        'name',
        'comment',
        'email',
         'created_at',
          'updated_at',
          'deleted_at'
    ];

    protected $hidden = [];
}
