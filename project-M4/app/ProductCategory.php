<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductCategory extends Model
{
    //
    public $timestaps = false;
    protected $table = 'laravel13.product_categories';
    protected $fillable = ['name','description','image_url','image_description',"updated_at","created_at"];

}
