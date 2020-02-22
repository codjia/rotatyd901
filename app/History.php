<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{


    //table name
    protected $table = 'history';
    //PrimaryKey
    public $primaryKey = 'id';
    //timesptamps
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'body','cover_image'
    ];
}
