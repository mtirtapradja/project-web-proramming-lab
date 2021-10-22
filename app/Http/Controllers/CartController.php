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

        return view('pages.cart.my-cart', [
            'title' => 'Cart',
            'carts' => $carts,
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
        $product = Product::all()->firstWhere('id', $request->product_id);

        $validatedData = $request->validate([
            'user_id' => ['required'],
            'product_id' => ['required'],
            'quantity' => ['required'],
            'price' => ['required'],
        ]);
        /* //TODO Harusnya pake sub_total jadi buat itung si total nya tinggal jumlahin subtotal */
        // $validatedData['sub_total'] = $this->calculateSubTotal($request->quantity, $product->price);

        Cart::create($validatedData);

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

    public function calculateSubTotal($quantity, $price)
    {
        return $quantity * $price;
    }
}
