<?php

namespace App\Http\Controllers\frontent;

use App\Http\Controllers\Controller;
use App\Models\frontend\Order;
use Illuminate\Http\Request;

class Checkout extends Controller
{
    public function index(){
        $data['products'] = Order::all();
        return view('frontend.checkout',$data);
    }

    public function store(Request $request)
    {
        // dd($request);
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'contact' => $request->contact,
                'address' => $request->address,
                'price' => $request->price,
            ];
        // print_r($data);
        // $model = new Job;
        if (Order::create($data)) {
            return redirect('cart')->with('msg', 'Successfully Order');
        }
    }
}
