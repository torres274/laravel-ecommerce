<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function cart()
    {
        return view('/store/cart');
    }

    public function removeProductFromCart($productId)
    {
        Cart::remove($productId);
        return redirect('/store/cart');
    }

    public function updateProductFromCart($productId)
    {
        Cart::update($productId);
        return redirect('/store/cart');
    }

}
