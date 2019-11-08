<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Product;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index(Request $request)
    {

        $current_user=\Auth::user();
        
        if ($current_user->isCustomer()) {
            abort(403, 'Unauthorized action.');
        }

        $order = Order::with('user')->paginate(3);
        $user = User::all();

        return view('/admin/order', compact('user'))->with('order',$order);
    }

    public function show($id)
    {
        $orders = Order::find($id);

        return response()->json([
            'error' => false,
            'orders'  => $orders,
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->input(), array(
            'status' => 'required',
        ));

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $orders = Order::find($id);

        $orders->status = $request->input('status');

        $orders->save();

        return response()->json([
            'error' => false,
            'orders'  => $orders,
        ], 200);
    }

    public function orderDetail($id)
    {
        $order = OrderDetail::where('order_id', $id)->paginate(3);
        $product = Product::all();       

        return view('/admin/orderDetail', compact('product'))->with('order',$order);
    }
}
