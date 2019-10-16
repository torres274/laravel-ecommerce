<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $order = Order::with('user')->paginate(3);
        $user = User::all();

        return view('order', compact('user'))->with('order',$order);
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
}
