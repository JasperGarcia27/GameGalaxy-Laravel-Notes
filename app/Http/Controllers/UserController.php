<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class UserController extends Controller
{
    public function viewProfile() {
    	// view((Folder Name).(File Name))
        if(Auth::user()) {
            $products = Auth::user()->products()->get();
            $orders = Auth::user()->orders()->orderBy('created_at', 'desc')->get();

            $adminAccounts = User::where('isAdmin', 1)->where('isSeller',0)->get();
            $sellerAccounts = User::where('isAdmin', 0)->where('isSeller',1)->get();
            $userAccounts = User::where('isAdmin', 0)->where('isSeller',0)->get();

            $myAccount = Auth::user();

            return view('users.profile')->with('products', $products)->with('orders', $orders)->with('users', $userAccounts)->with('sellers', $sellerAccounts)
            ->with('admins', $adminAccounts);
        }
        else {
            return redirect('/login');
        }
    }

    public function isSeller($id) {
        $user = User::find($id);

        if(Auth::user()->isAdmin == 1) {
            $user->isAdmin = 0;
            $user->isSeller = 1;
            $user->update();  
        }
        return redirect('/profile');

    }

    public function isUser($id) {
        $user = User::find($id);
        
        if(Auth::user()->isAdmin == 1) {
            $user->isAdmin = 0;
            $user->isSeller = 0;
            $user->update();  
        }
        return redirect('/profile');

    }

    public function isAdmin($id) {
        $user = User::find($id);
        
        if(Auth::user()->isAdmin == 1) {
            $user->isAdmin = 1;
            $user->isSeller = 0;            
            $user->update();  
        }
        return redirect('/profile');

    }

    // public function editProfile($id) {
    //     if(Auth::user()) {
    //         $user = Product::find($id);
    //         if(Auth::user()->id == $product->user_id){
                
    //             return view('products.edit')->with('product', $product);
    //         }
    //         else {
    //             return redirect('/myProducts');
    //         }
    //     }
    //     else {
    //         return redirect('/login');
    //     }
    // }

    

    public function updateProfile() {
        return view('users.updateProfile');
    }

    public function addProfile(Request $request, $id) {
        
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required',
            'image' => 'nullable',
            ]);
    
            
            $user = User::find($id);        
    
            $user->name = $request->input('name');
            $user->email= $request->input('email');
            
            if($request->hasFile('image'))
            {
                $newimage = $request->file('image');
                $newfilename = time() . '.' . $request->image->extension();
                $newpath = $request->image->move(public_path('/images/profile/'), $newfilename);
                $user->image = $newfilename;
    
            }
    
            $user->update();
    
            return redirect('/profile');

    }

}
