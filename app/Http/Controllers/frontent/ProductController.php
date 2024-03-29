<?php

namespace App\Http\Controllers\frontent;

use App\Http\Controllers\Controller;
use App\Models\frontend\Order;
use App\Models\frontend\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data['products'] = Product::all();
        return view('frontend.product',$data);
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);     
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }  
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
        
    }
    public function order(Request $request){
        $order = new Order();
        $order_data = $request->all();
        $order_data['order_number'] = 'ORD'.rand(5,5000);
        print_r($order_data);
        $order->create($order_data);
    //     $card = session('cart');
    //     print_r($card);
    //     $order_data ['coupon'] =  '100';
    //     $order_data ['shipping_id'] =  '15';
    //     $order->fill($order_data);
    //    dd($order->all());
    }
}
