<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function News(){
        return $this->belongsTo('News');
    }
}
