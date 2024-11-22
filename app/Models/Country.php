<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    public function post(){
        return $this->hasOneThrough(Post::class,User::class,'country_id','user_id','id','id');
    }

    public function posts(){
        return $this->hasManyThrough(Post::class,User::class,'country_id','user_id','id','id');
    }
}
