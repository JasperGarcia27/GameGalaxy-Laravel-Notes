<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class ProductController extends Controller
{
    public function add() {
    	// view((Folder Name).(File Name))
        if(Auth::user()) {
            return view('products.newProduct');
        }
        else {
            return redirect('/login');
        }
    	
    }

    public function store(Request $request) {

    	if(Auth::user()) {

    		$product = new Product;

    		$product->name = $request->input('name');
    		$product->description = $request->input('description');
    		$product->price = $request->input('price');
    		$product->category = $request->input('category');
            
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $filename = time() . '.' . $request->image->extension();
                $path = $request->image->move(public_path('/images/products/'), $filename);
                $product->image = $filename;

            }

    		$product->user_id = (Auth::user()->id);

    		$product->save();

    		return redirect('/profile');
    	}
    	else {
    		return redirect('/login');
    	}

    }



    // public function allAccounts() {
        
    //     $adminAccounts = User::where('isAdmin', 1)->where('isSeller',0)->get();
    //     $sellerAccounts = User::where('isAdmin', 0)->where('isSeller',1)->get();
    //     $userAccounts = User::where('isAdmin', 0)->where('isSeller',0)->get();
        
        
    //     // $products = Product::all();

    // 	return view('users.allAccounts')->with('users', $userAccounts)->with('sellers', $sellerAccounts)
    //     ->with('admins', $adminAccounts);
    // }

    public function myProducts() {
        
        if(Auth::user()) {
            $products = Auth::user()->products()->get();
            // $products = Product::all();

            return view('products.myProduct')->with('products', $products);
        }
        else {
            return redirect('/login');
        }
    }

    public function index() {
    	$products = Product::where('isActive', 1)->get();
        // $products = Product::all();

    	return view('products.index')->with('products', $products);
    }

    // public function seller() {
    // 	$user = Auth::user()->where('isSeller', 1)->get();
    //     // $products = Product::all();

    // 	return view('inc.navbar')->with('user', $user);
    // }

    public function editproduct($id) {
        if(Auth::user()) {
            $product = Product::find($id);
            if(Auth::user()->id == $product->user_id){
                
                return view('products.edit')->with('product', $product);
            }
            else {
                return redirect('/myProducts');
            }
        }
        else {
            return redirect('/login');
        }
    }

    public function updateproduct(Request $request, $id)
    {
        $this->validate($request, [
        'name' => 'required|max:255',
        'description' => 'required',
        'price' => 'required',
        'category' => 'required',
        'image' => 'required',
        ]);

        
        $product = Product::find($id);        

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        
        if($request->hasFile('image'))
        {
            $newimage = $request->file('image');
            $newfilename = time() . '.' . $request->image->extension();
            $newpath = $request->image->move(public_path('/images/products/'), $newfilename);
            $product->image = $newfilename;

        }

        $product->update();

        return redirect('/profile');
    }

    public function archive($id)
    {
        $product = Product::find($id);
        if(Auth::user()->id == $product->user_id) {
            $product->isActive = 0;
            $product->update();  
        }
        return redirect('/profile');
    }

    public function activate($id)
    {
        $product = Product::find($id);
        if(Auth::user()->id == $product->user_id) {
            $product->isActive = 1;
            $product->update();  
        }
        return redirect('/profile');
    }


    public function show($id) {

        $product = Product::find($id);
        return view('products.show')->with('product', $product);
    }

    // public function welcome() {
    //     // $products = Product::inRandomOrder()->limit(3)->where('isActive', 1)->get();
    //     // return view('welcome')->with('products', $products);
    //     $products = Product::inRandomOrder()->limit(3)->where('isActive', 1)->get();
    //     $allproducts = Product::inRandomOrder()->where('isActive', 1)->get();
    //     return view('welcome')->with('products', $products)->with('allproducts', $allproducts);
    // }

    public function order(Request $request, $id) {

        $product = Product::find($id);
        $user_id = Auth::user()->id;

        $order = new Order;

        $order->product_id = $product->id;
        $order->name = $product->name;
        $order->image = $product->image;
        $order->price = $product->price;
        $order->user_id = $user_id;
        $order->quantity = $request->input('quantity');
        $order->bill = ($order->quantity) *  $product->price;

        $order->save();


        return redirect("/products");
    }
}
