<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::paginate(4);
        $items = Item::all();
        return view('home')
        ->with('categories', $categories)
        ->with('products', $products)
        ->with('items', $items);
    }

    public function detail($slug){

        $product = Product::where('slug', $slug)->first();
        return view('detail')
        ->with('product', $product);
    }

    public function product(){
        
        $categories = Category::all();
        $items = Item::all();

        return view('products')
        ->with('categories', $categories)
        ->with('items', $items);
    }

    public function exclusive(){

        return view('exclusive');
    }

    public function membership(){
        
        return view('membership');
    }
}
