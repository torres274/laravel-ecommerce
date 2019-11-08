<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\OrderDetail;
use App\Product;

class UserOrdersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $current_user=\Auth::user()->id;

        $order = Order::where('user_id', $current_user)->paginate(10);
        $product = Product::all();       

        return view('/store/orders', compact('product'))->with('order',$order);
    }

    public function ordersUser($id)
    {
        $order = OrderDetail::where('order_id', $id)->paginate(20);
        $product = Product::all();       

        return view('/store/ordersUser', compact('product'))->with('order',$order);
    }
}
