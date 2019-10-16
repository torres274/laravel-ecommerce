<?php

namespace App;
use App\User;
use App\OrderDetail;

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

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }
}
