<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use File;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $product = Product::with('category')->paginate(3);
        $productCategory = ProductCategory::all();

        return view('/admin/product', compact('productCategory'))->with('product',$product);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->input(), array(
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'price_neto' => 'required',
            'iva' => 'required',
            'price_total' => 'required',
            'image' => '',
        ));

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $productImage = $request->file('image');
        $productImageName = rand() . '.' . $productImage->getClientOriginalExtension();
        $productImage->move(public_path('img/products'), $productImageName);

        $products = Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price_neto' => $request->price_neto,
            'iva' => $request->iva,
            'price_total' => $request->price_total,
            'image' => $productImageName,
        ]);

        return response()->json([
            'error' => false,
            'products'  => $products,
        ], 200);
    }

    public function show($id)
    {
        $products = Product::find($id);

        return response()->json([
            'error' => false,
            'products'  => $products,
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->input(), array(
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'price_neto' => 'required',
            'iva' => 'required',
            'price_total' => 'required',
            'image' => '',
        ));

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $products = Product::find($id);

        $products->name = $request->input('name');
        $products->category_id = $request->input('category_id');
        $products->description = $request->input('description');
        $products->price_neto = $request->input('price_neto');
        $products->iva = $request->input('iva');
        $products->price_total = $request->input('price_total');
        
        // $products->image = $request->input('image');

        $products->save();

        return response()->json([
            'error' => false,
            'products'  => $products,
        ], 200);
    }

    public function destroy($id)
    {

        $product = Product::find($id);
        
        $path = public_path("img/products/" . $product->image);
        if(File::exists($path)) {
            File::delete($path);
        }

        $product->delete();

        return response()->json([
            'error' => false,
            'product'  => $product,
        ], 200);
    }
}
