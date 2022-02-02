<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Transactiondetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function view(){

        $user = Auth::user();

        $transactions = Transaction::where('user_id', $user->id)->get();
        $details = [];
        
        foreach($transactions as $transaction){

            $transactiondetails = Transactiondetail::where('transaction_id', $transaction->id)->get();

            foreach($transactiondetails as $transactiondetail){
                array_push($details, [
                    'id' => $transactiondetail->id,
                    'transaction_id' => $transactiondetail->transaction_id,
                    'product_name' => $transactiondetail->product->name,
                    'product_price' => $transactiondetail->product->price,
                    'quantity' => $transactiondetail->quantity
                ]);
            }

        }
        
        return view('user.transactions')
        ->with('transactions', $transactions)
        ->with('details', $details);
    }
}
