<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Creating relationship One to Many (Inverse) - Many posts belong to user // Get posts that belong to that user
    public function user(){
        return $this->belongsTo('App\User');
    }
}
