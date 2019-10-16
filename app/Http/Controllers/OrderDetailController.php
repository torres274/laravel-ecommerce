<?php

namespace App\Http\Controllers;

use App\OrderDetail;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderDetailController extends Controller
{
    public function index(Request $request)
    {
        $orderDetail = OrderDetail::with('order', 'product')->paginate(3);
        $order = Order::all();
        $product = Product::all();

        return view('orderDetail', compact('order', 'product'))->with('orderDetail',$orderDetail);
    }

    public function show($id)
    {
        $orders = Order::find($id);

        return response()->json([
            'error' => false,
            'orders'  => $orders,
        ], 200);
    }
}
