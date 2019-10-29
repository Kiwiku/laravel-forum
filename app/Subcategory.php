<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{

    protected $table = 'subcategories';
    public $primaryKey = 'subcategory_id';
    public $foreginKey = 'category_id';
    public $timestamps = true;

    // Get the category which subcategory belongs to
    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }
}
