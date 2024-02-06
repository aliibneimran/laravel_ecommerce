<?php

namespace App\Http\Controllers;

use App\Models\frontend\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::get();
        return view('backend.orders.index',compact('orders'));
    }
    public function pdfview()
    {
        $data = [
            [
                'quantity' => 1,
                'description' => '1 Year Subscription',
                'price' => '129.00'
            ]
        ];
        // set_time_limit(120);
        ini_set('max_execution_time', 180);
        $pdf = Pdf::loadView('pdf', ['data' => $data]);
        // $pdf = Pdf::loadView('pdf');
        return $pdf->download();
    }

    public function Invoice()
    {
        $pdf = PDF::loadView('invoice_pdf');

        return $pdf->download('techsolutionstuff.pdf');
    }
}
