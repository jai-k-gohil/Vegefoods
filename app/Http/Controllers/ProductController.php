<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function getProducts()
    {
        $products = \App\Product::all();
//        $posts = Post::orderBy('createdAt','desc')->get();
//        $posts = Post::orderBy('created_at','desc')->paginate(2);
        return view('shop', ['products' => $products]);
    }

    public function addToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$product->id);
        Session::put('cart', $cart);
        return redirect()->route('home');
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
//        $i=0;
//        $ids = [];
//        foreach($cart->items as $item=> $value) {
//            $ids[$i++] = $item->id;
//        }
//
//        $productDetails = Product::getProductsById($ids);
        return view('cart',['products'=> $cart->items,'totalPrice'=> $cart->totalPrice]);
    }

}
