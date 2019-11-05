<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Order;

class OrderDetail extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'subtotal_product',
        'iva',
        'price_total',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
