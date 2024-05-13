<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDetail extends Controller
{
    public function index()
    {
        return view('frontend.product');
    }
    public function product_detail()
    {
        return view('frontend.product_detail');
    }
}
//nay khong dung product detail