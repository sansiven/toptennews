<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function User(){
        return $this->belongsTo('App\User');
    }

    public function Comment(){
        return $this->hasMany('App\Comment');
    }

    public function categories(){
        return $this->belongsTo('App\Category');
    }
}
