@extends('layouts.main')

@section('container')
    <h1>My Cart Page</h1>
    @foreach ($carts as $cart)
        <h1>
            product_id = {{ $cart->product_id }} -> {{ $cart->quantity }}
        </h1>
        <br>
    @endforeach
@endsection
