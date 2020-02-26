<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product){
        // dd($product);

        // $product = Product::find($productId);

        // add the product to cart
        \Cart::session(auth()->id())->add(array(
            'id' => uniqid($product->id),
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 4,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return redirect()->route('cart.index');
    }

    public function index(){
        return view('cart.index');
    }
}
