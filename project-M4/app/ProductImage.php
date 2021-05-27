<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //
    public $timestaps = false;
    protected $table = "laravel13.product_images";
    protected $fillable = ["name","image_url","image_description","product_id","updated_at","created_at"];

    public function product()
    {
        return $this->belongsTo(Product::class,'id','product_id');
    }
}
