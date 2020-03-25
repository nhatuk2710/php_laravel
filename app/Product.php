<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable =['product_name','product_desc','thumbnail','price','quantity','gallery','category_id','brand_id'];

    public function Categories(){
        return $this->belongsTo("\App\Category");
    }

    public function Brands(){
        return $this->belongsTo("\App\Brand");
    }
}
