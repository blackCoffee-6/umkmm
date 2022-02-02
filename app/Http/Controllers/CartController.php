<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Transaction;
use App\Transactiondetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function view(){

        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->get();

        return view('user.cart')
        ->with('carts', $carts);
    }

    public function addcart($item_id){

        $user = Auth::user();

        Cart::create([
            'user_id' => $user->id,
            'product_id' => $item_id,
            'quantity' => 1
        ]);

        return redirect('/');
    }

    public function deletecart($item_id){

        $user = Auth::user();

        Cart::where('user_id', $user->id)->where('product_id', $item_id)->delete();

        return redirect('/cart');
    }

    public function updatecart($item_id, Request $request){

        $user = Auth::user();

        Cart::where('user_id', $user->id)->where('product_id', $item_id)->update([
            'quantity' => $request->quantity
        ]);

        return redirect('/cart');
    }

    public function checkout(){

        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->get();
        $currdate = Carbon::now('Asia/Jakarta');

        Transaction::create([
            'user_id' => $user->id,
            'date' => $currdate
        ]);

        $transaction = Transaction::where('user_id', $user->id)->latest()->first();
        
        foreach($carts as $cart){

            Transactiondetail::create([
                'transaction_id' => $transaction->id,
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity
            ]);

            $product = Product::where('id', $cart->product_id)->first();

            Product::where('id', $cart->product_id)->update([
                'stock' => $product->stock - $cart->quantity
            ]);

        }

        
        Cart::where('user_id', $user->id)->delete();


        return redirect('/home');
    }
}
