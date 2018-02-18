<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ProductUpload extends Model {
    protected $table = 'products';
    protected $fillable = [
        'productId', 'name', 'description', 'brandId', 'brandName', 'categoryId', 'categoryName', 'sku', 'stock', 'tax', 'category', 'image', 'price', 'priceNot'
    ];

} 