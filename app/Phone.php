<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $filltable = ['mobile' ,'user_id'];

    // protected $hidden = ['remember_token', 'password'];

    
    public function user(){
       return $this->belongsTo('App\User');
    }
}
