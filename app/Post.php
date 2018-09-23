<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function catagory(){
        return $this->belongsTo('App\Catagory');
    }
}
