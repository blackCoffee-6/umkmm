<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use App\Product;
use App\Transaction;
use App\Transactiondetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function dashboard()
    {

        return view('admin.dashboard');
    }

    public function category()
    {

        $categories = Category::all();

        return view('admin.category')->with('categories', $categories);
    }

    public function addcategory(Request $request)
    {

        $request->validate([
            'name' => 'required|string|min:3'
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect('/admin-category');
    }

    public function editcategory($category_id, Request $request)
    {

        $request->validate([
            'name' => 'required|string|min:3'
        ]);

        Category::where('id', $category_id)->update([
            'name' => $request->name
        ]);

        return redirect('/admin-category');
    }

    public function deletecategory($category_id)
    {

        Category::where('id', $category_id)->delete();

        return redirect('/admin-category');
    }

    public function products()
    {

        $products = Product::all();
        return view('admin.products')->with('products', $products);
    }

    public function addproduct(Request $request)
    {

        $request->validate([
            'name' => 'required|string|min:3',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:1',
            'description' => 'required|string|min:3',
            'image' => 'required|mimes:jpeg, jpg, png',
        ]);

        $file = $request->file('image');
        $destinationPath = 'assets/';
        $file->move($destinationPath, $request->image->getClientOriginalName());

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => $request->image->getClientOriginalName(),
            'slug' => Str::slug($request->name)
        ]);

        return redirect('/admin-products');
    }

    public function editproduct(Request $request, $product_id)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:1',
            'description' => 'required|string|min:3',
            'image' => 'mimes:jpeg, jpg, png',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'assets/';
            $file->move($destinationPath, $request->image->getClientOriginalName());

            Product::where('id', $product_id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'stock' => $request->stock,
                'description' => $request->description,
                'image' => $request->image->getClientOriginalName()
            ]);
        } else {
            Product::where('id', $product_id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'stock' => $request->stock,
                'description' => $request->description
            ]);
        }

        return redirect('/admin-products');
    }

    public function deleteproduct($product_id)
    {

        Product::where('id', $product_id)->delete();

        return redirect('/admin-products');
    }

    public function itemassigned()
    {

        $items = Item::all();
        $categories = Category::all();
        $products = Product::all();
        return view('admin.itemassign')
            ->with('categories', $categories)
            ->with('products', $products)
            ->with('items', $items);
    }

    public function additemassigned(Request $request)
    {

        Item::create([
            'product_id' => $request->product_id,
            'category_id' => $request->category_id
        ]);

        return redirect('/admin-item-assigned');
    }

    public function edititemassigned(Request $request, $item_id)
    {

        Item::where('id', $item_id)->update([
            'product_id' => $request->product_id,
            'category_id' => $request->category_id
        ]);

        return redirect('/admin-item-assigned');
    }

    public function deleteitemassigned($item_id)
    {
        Item::where('id', $item_id)->delete();
        return redirect('/admin-item-assigned');
    }

    public function users()
    {

        $users = User::where('role', '!=', 'admin')->get();

        return view('admin.users')->with('users', $users);
    }

    public function deleteuser($user_id)
    {

        User::where('id', $user_id)->delete();
        return redirect('/admin-users');
    }

    public function userstransaction($user_id)
    {

        $user = User::where('id', $user_id)->first();

        $transactions = Transaction::where('user_id', $user->id)->get();
        $details = [];

        foreach ($transactions as $transaction) {

            $transactiondetails = Transactiondetail::where('transaction_id', $transaction->id)->get();

            foreach ($transactiondetails as $transactiondetail) {
                array_push($details, [
                    'id' => $transactiondetail->id,
                    'transaction_id' => $transactiondetail->transaction_id,
                    'product_name' => $transactiondetail->product->name,
                    'product_price' => $transactiondetail->product->price,
                    'quantity' => $transactiondetail->quantity
                ]);
            }
        }

        return view('admin.usertransaction')
            ->with('user', $user)
            ->with('transactions', $transactions)
            ->with('details', $details);
    }

    public function transactions()
    {

        $transactions = Transaction::all();
        $details = [];

        foreach ($transactions as $transaction) {

            $transactiondetails = Transactiondetail::where('transaction_id', $transaction->id)->get();

            foreach ($transactiondetails as $transactiondetail) {
                array_push($details, [
                    'id' => $transactiondetail->id,
                    'transaction_id' => $transactiondetail->transaction_id,
                    'product_name' => $transactiondetail->product->name,
                    'product_price' => $transactiondetail->product->price,
                    'quantity' => $transactiondetail->quantity
                ]);
            }
        }

        return view('admin.transactions')
        ->with('details', $details)
        ->with('transactions', $transactions);
    }
}
