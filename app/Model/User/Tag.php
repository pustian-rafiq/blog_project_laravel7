<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     public function posts(){
    	return $this->belongsToMany('App\Model\User\Post','post_tags');
    }
}
