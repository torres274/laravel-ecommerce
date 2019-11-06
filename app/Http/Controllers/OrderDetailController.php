<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Gloudemans\Shoppingcart\Facades\Cart;
use Redirect;
use Session;
use Auth;
use App\Order;
use App\OrderDetail;

class OrderDetailController extends Controller
{

    public function index()
    {
        return view('/');
    }

    public function new(Request $request)
    {
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->payment_type = 'Deposito';
            $order->status = 'Pendiente';
            $order->save();

        Session::put('orderId', $order->getKey());
        $orderId = Session::get('orderId');
        $orderLast = Order::find($orderId);

        foreach (Cart::content() as $item) {
            $suborder = new OrderDetail();
            $suborder->order_id = $orderId;
            $suborder->product_id = $item->id;
            $suborder->quantity = $item->qty;
            $suborder->subtotal_product = $item->subtotal;
            $suborder->iva = $item->tax * $item->qty;
            $suborder->price_total = $item->total;
            $suborder->save();
        }

        Cart::destroy();
        return Redirect::to('/');
    }
}