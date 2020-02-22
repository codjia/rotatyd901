<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
  

    protected $fillable = [
        'id', 'title','subtitle','publisher','content','cover_image',
    ];


}
