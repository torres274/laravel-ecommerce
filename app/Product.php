<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'price_neto',
        'iva',
        'price_total',
        'image'
    ];

    public function category() {
        return $this->belongsTo(ProductCategory::class);
    }
}
