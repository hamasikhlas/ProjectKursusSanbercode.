<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    protected $table = "product_categories";
    protected $fillable = ['name', 'description', 'image_url', 'image_description'];
}
