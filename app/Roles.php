<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    // Get the user that has that role
    public function user_R(){
        $this->belongsTo('App\User');
    }
}
