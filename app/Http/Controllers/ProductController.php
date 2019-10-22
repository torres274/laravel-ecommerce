<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $product = Product::with('category')->paginate(3);
        $productCategory = ProductCategory::all();

        return view('product', compact('productCategory'))->with('product',$product);
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

        // $imageName = rand() . '.' . $request->file('image')->getClientOriginalExtension();
        //     $destinationPath = 'img/products';
        //     $fileName = rand() . '.' . $extension;
        //     $upload_success = $image->move($destinationPath, $imageName);

        // $productImage = $request->file('image');
        // $productImageName = time() . $productImage->getClientOriginalExtension();
        // $productImage->move(public_path("img/products"), $productImageName);

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $products = Product::create($request->all());

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
        $products->image = $request->input('image');

        $products->save();

        return response()->json([
            'error' => false,
            'products'  => $products,
        ], 200);
    }

    public function destroy($id)
    {
        $products = Product::destroy($id);

        return response()->json([
            'error' => false,
            'products'  => $products,
        ], 200);
    }
}
