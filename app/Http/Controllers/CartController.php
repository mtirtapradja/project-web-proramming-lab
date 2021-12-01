<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Cari cart yang sesuai dengan user_id dari user sekarang
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        $total_price = 0;
        $total_quantity = 0;

        foreach ($carts as $cart) {
            $total_price += $this->calculateSubTotal($cart->quantity, $cart->price);
            $total_quantity += $cart->quantity;
        }

        return view('pages.cart.my-cart', [
            'title' => 'Cart',
            'carts' => $carts,
            'total_price' => $total_price,
            'total_quantity' => $total_quantity
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
    public function store(Request $request)
    {
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        $product = $carts->firstWhere('product_id', $request->product_id);
        $validatedData = $request->validate([
            'user_id' => ['required'],
            'product_id' => ['required'],
            'quantity' => ['required', 'numeric', 'min:1'],
            'price' => ['required'],
        ]);

        if ($product) {
            $request['quantity'] = $product->quantity + $request->quantity;
            $this->update($request);
        } else {
            Cart::create($validatedData);
        }

        return back()->with('success', 'Product has been added to cart!');
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
    public function edit($productName)
    {
        $product = Product::all()->firstWhere('name', $productName);
        $cart = Cart::all()->where('product_id', $product->id)->where('user_id', auth()->user()->id);

        return view('pages.cart.edit-cart', [
            'title' => 'Edit Cart',
            'product' => $product,
            'cart' => $cart->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $rules = [
            'user_id' => ['required'],
            'product_id' => ['required'],
            'quantity' => ['required'],
            'price' => ['required'],
        ];

        // $validatedData['sub_total'] = $this->calculateSubTotal($request->quantity, $request->price);

        $validatedData = $request->validate($rules);

        Cart::where('product_id', $request->product_id)
            ->update($validatedData);

        return redirect('/my-cart')->with('success', 'Product has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Cart::where('product_id', $request->product_id)->delete();
        return redirect('/my-cart')->with('success', 'Post has been deleted!');
    }

    public function checkout()
    {
        $transactionController = app('App\Http\Controllers\TransactionController');

        $carts = Cart::where('user_id', auth()->user()->id)->get();

        $transactionController->createTransaction(auth()->user()->id);

        foreach ($carts as $cart) {
            $transactionController->store($cart);
            Cart::where('product_id', $cart->product_id)->delete();
        }

        return redirect('/my-cart')->with('success', 'Successfully Checkout');
    }

    public function calculateSubTotal($quantity, $price)
    {
        return $quantity * $price;
    }
}
