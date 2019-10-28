<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Creating relationship One to Many (Each category has many subcategories)
    public function subcategories(){
        return $this->hasMany('App\Subcategories');
    }
}
