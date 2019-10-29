<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';
    public $primaryKey = 'category_id';
    public $timestamps = true;

    // Creating relationship One to Many (Each category has many subcategories)
    public function subcategory(){
        return $this->hasMany('App\Subcategory', 'category_id');
    }
}
