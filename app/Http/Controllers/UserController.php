<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function viewprofile(){

        $user = Auth::user();

        return view('user.profile')->with('user', $user);
    }

    public function editprofile(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|numeric|min:9',
        ]);

        $user = Auth::user();

        User::where('id', $user->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone
        ]);
        
        return redirect('/profile');
    }
}
