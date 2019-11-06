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

}
