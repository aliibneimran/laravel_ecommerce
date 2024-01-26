<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data['products'] = Product::all();
        return view('backend.products.index',$data);
    }
    public function create(){
        return view('backend.products.addProduct');
    }
    public function store(Request $request)
    {
        // dd($request);
        $validate = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'image' => 'mimes:jpg,jpeg,png',
        ]);
        $filename = time() . '.' . $request->image->extension();
        // dd($request->photo);
        if ($validate) {
            // $tags = implode(",", $request->get('tags'));
            $data = [
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'image' => $filename,
            ];
        }
        // print_r($data);
        // $model = new Job;
        if (Product::create($data)) {
            $request->image->move('uploads', $filename);
            return redirect('all-products')->with('msg', 'Product Successfully Added');
        }
    }
}
