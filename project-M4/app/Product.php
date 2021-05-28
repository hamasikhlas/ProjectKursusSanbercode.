<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CategoriesModel;

class Product extends Model
{
    //
    public $timestaps = false;
    protected $table = "laravel13.products";
    protected $fillable = ["name","description","product_category_id","updated_at","created_at"];

    public function productCategories()
    {
        return $this->hasOne(CategoriesModel::class,'id','product_category_id');
    }

    public function productImages(){
        return $this->hasMany(ProductImage::class);
    }
}
