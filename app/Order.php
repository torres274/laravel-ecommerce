<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'payment_type',
        'subtotal',
        'iva',
        'price_total',
        'status'
    ];
}
