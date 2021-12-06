<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    private $newInsertedTransaction;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::where('user_id', auth()->user()->id)->get(); // dapet transaction header dari si user
        $transactionDetails = TransactionDetail::all(); // dapet semua transaction detail

        foreach ($transactions as $transaction) {
            $sub_total_per_transaction = 0;
            foreach ($transactionDetails as $transactionDetail) {
                if ($transaction->id === $transactionDetail->transaction_id) {
                    $sub_total_per_transaction += $transactionDetail->sub_total;
                }
            }
            $transaction['sub_total_per_transaction'] = $sub_total_per_transaction;
        }

        return view('pages.my-history-transaction', [
            'title' => 'Manage Products',
            'transactions' => $transactions->reverse(),
            'transactionDetails' => $transactionDetails,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Cart $cart)
    {
        $sub_total = $this->calculateSubTotal($cart->quantity, $cart->price);
        TransactionDetail::create([
            'transaction_id' => $this->newInsertedTransaction,
            'product_id' => $cart->product_id,
            'quantity' => $cart->quantity,
            'price' => $cart->price,
            'sub_total' => $sub_total
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createTransaction($user_id)
    {
        // Bikin transaction header nya
        $this->newInsertedTransaction = Transaction::create([
            'user_id' => $user_id
        ])->id;
    }

    public function calculateSubTotal($quantity, $price)
    {
        return $quantity * $price;
    }
}
