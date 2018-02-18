<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model {
    protected $table = 'products';
    protected $fillable = [
        'name', 'description', 'brandId', 'brandName', 'categoryId', 'categoryName', 'sku', 'stock', 'tax', 'category', 'image', 'price', 'priceNot'
    ];
} 