<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    //  Comment ko muna to
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome() {
        $products = Product::inRandomOrder()->limit(3)->where('isActive', 1)->get();
        $allproducts = Product::inRandomOrder()->limit(24)->where('isActive', 1)->get();
        return view('welcome')->with('products', $products)->with('allproducts', $allproducts);
    }
}
