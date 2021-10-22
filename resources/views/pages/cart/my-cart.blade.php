@extends('layouts.main')

@section('container')
    <h1>My Cart Page</h1>
    @foreach ($carts as $cart)
        <h1>
            product_id = {{ $cart->product_id }} -> {{ $cart->quantity }}
        </h1>
        <br>
    @endforeach
    <div class="row justify-content-center">
        <p class="fs-1 mb-5">My Carts</p>
        @foreach ($products as $product)
            <div class="mb-3">
                <div class="card">
                    <img src="{{ asset('storage/' . $product->image_url) }}" class="card-img-top" alt="Image">
                    <div class=" card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                            <small class="text-muted">
                                (IDR. {{ $product->price }})
                            </small>
                        <p class="d-flex justify-content-between">
                            <small class="text-muted">
                                x{{ $cart->quantity }} pcs
                            </small>
                        </p>
                        <p class="d-flex justify-content-between">
                            <small class="">
                                IDR. {{ $product->price * $cart->quantity }}
                            </small>
                        </p>
                        <a href="/products/{{ $product->name }}/edit"
                            class="btn btn-warning">Edit</a>
                        <form action="/products/{{ $product->name }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="bg-danger border-0 btn btn-warning text-white"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
