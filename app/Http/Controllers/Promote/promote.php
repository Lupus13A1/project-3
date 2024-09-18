<?php

namespace App\Http\Controllers\Promote;

use App\Http\Controllers\Controller;
use App\Models\Product; // Import the Product model
use Illuminate\Http\Request;

class promote extends Controller
{
    public function index()
    {
        return view('promote.index');
    }

    public function products()
    {
        $products = Product::all();

        return view('promote.product', compact('products'));
    }

    public function menu2()
    {
        return view('promote.menu');
    }

    public function order()
    {
        return view('promote.order');
    }

    public function contact()
    {
        return view('promote.contact');
    }

    public function detail()
    {
        return view('promote.detail');
    }
}
