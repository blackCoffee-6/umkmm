<?php

namespace App\Http\Controllers;

use App\Product;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function view()
    {

        $user = Auth::user();
        $wishlists = Wishlist::where('user_id', $user->id)->get();

        return view('user.wishlist')->with('wishlists', $wishlists);
    }

    public function wishlist($status, $item_id)
    {
        $user = Auth::user();
        $product = Product::where('id', $item_id)->first();

        if ($status == 'add') {
            Wishlist::create([
                'user_id' => $user->id,
                'product_id' => $product->id
            ]);
        }

        if ($status == 'remove') {
            Wishlist::where('user_id', $user->id)->where('product_id', $product->id)->delete();
        }
        return redirect('/detail/' . $product->slug);
    }

    public function deletewishlist($wishlist_id)
    {

        $user = Auth::user();

        Wishlist::where('id', $wishlist_id)->delete();

        return redirect('/wishlist');
    }
}
