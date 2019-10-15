<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InventoryController extends Controller
{
    public function index(Request $request)
    {
        $inventory = Inventory::with('product')->paginate(3);
        $product = Product::all();

        return view('inventory', compact('product'))->with('inventory',$inventory);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->input(), array(
            'product_id' => 'required',
            'stock' => 'required',
        ));

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $inventories = Inventory::create($request->all());

        return response()->json([
            'error' => false,
            'inventories'  => $inventories,
        ], 200);
    }

    public function show($id)
    {
        $inventories = Inventory::find($id);

        return response()->json([
            'error' => false,
            'inventories'  => $inventories,
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->input(), array(
            'product_id' => 'required',
            'stock' => 'required',
        ));

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $inventories = Inventory::find($id);

        $inventories->product_id = $request->input('product_id');
        $inventories->stock = $request->input('stock');

        $inventories->save();

        return response()->json([
            'error' => false,
            'inventories'  => $inventories,
        ], 200);
    }

    public function destroy($id)
    {
        $inventories = Inventory::destroy($id);

        return response()->json([
            'error' => false,
            'inventories'  => $inventories,
        ], 200);
    }
}
