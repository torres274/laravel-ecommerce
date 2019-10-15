<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Inventory extends Model
{
    protected $fillable = [
        'product_id',
        'stock'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
