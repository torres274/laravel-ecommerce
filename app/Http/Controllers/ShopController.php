<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use Cart;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->orderBy('category_id', 'asc')->paginate(9);
        $productCategory = ProductCategory::all();

        return view('/store/shop', compact('productCategory'))->with('products',$products);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $products = Product::with('category')->where('name', 'like', '%'.$search.'%')->paginate(9);
        $productCategory = ProductCategory::all();

        return view('/store/shop', compact('productCategory'))->with('products',$products);
    }

    public function orderByName(Request $request)
    {
        $products = Product::with('category')->orderBy('name', 'asc')->paginate(9);
        $productCategory = ProductCategory::all();

        return view('/store/shop', compact('productCategory'))->with('products',$products);
    }

    public function orderByPrice(Request $request)
    {
        $products = Product::with('category')->orderBy('price_neto', 'asc')->paginate(9);
        $productCategory = ProductCategory::all();

        return view('/store/shop', compact('productCategory'))->with('products',$products);
    }

    public function detail($id)
    {

        $productDetails = Product::where('id', $id)->first();
        $productCategory = ProductCategory::all();

        return view('/store/product-details')->with(compact('productDetails', 'productCategory'));
    }

    public function category($id)
    {
        $products = Product::where('category_id', $id)->paginate(9);
        $productCategory = ProductCategory::all();

        return view('/store/shop', compact('productCategory'))->with('products',$products);
    }

}
