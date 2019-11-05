<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class WebstoreController extends Controller
{
    public function index()
    {
        # We pass all the products from the database into
        # the $products variable, which is an array
        $products = Product::all();
        # We use the home view for the tutorial, but you could
        # use other views too. Home will be our webstore view
        return view('index')->with('products', $products);
    }
    # Our function for adding a certain product to the cart
    public function addToCart(Product $product)
    {
        Cart::add($product->id, $product->name, 1, $product->price_neto);
        return redirect('/');
    }
    # Our function for removing a certain product from the cart
    public function removeProductFromCart($productId)
    {
        Cart::remove($productId);
        return back();
    }

}
