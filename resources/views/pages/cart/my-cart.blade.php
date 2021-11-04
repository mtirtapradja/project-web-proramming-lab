@extends('layouts.main')

@section('container')
    {{-- <h1>
    product_id = {{ $cart->product_id }} -> {{ $cart->quantity }}
</h1>
<br> --}}
    <div class="row justify-content-center">
        <p class="fs-1 mb-5">My Carts</p>
        @foreach ($carts as $cart)
            <div class="card mb-3" style="width: 100%;">
                <div class="row g-0 p-3">
                    <div class="col-md-3 align-self-center">
                        <img src={{ asset('storage/' . $cart->product->image_url) }} class="cimg-fluid rounded-start"
                            alt="Image" style="height: 12em;">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body ms-4">
                            <h5 class="card-title">{{ $cart->product->name }} <small class="text-muted">
                                    (IDR {{ number_format($cart->product->price) }})
                                </small></h5>
                            <p class="d-flex justify-content-between">
                                <small class="text-muted">
                                    x {{ $cart->quantity }} pcs
                                </small>
                            </p>
                            <p class="d-flex justify-content-between">
                                <small class="text-muted">
                                    IDR. {{ number_format($cart->product->price * $cart->quantity) }}
                                </small>
                            </p>
                            <a href="/my-cart/{{ $cart->product->name }}/edit" class="btn btn-warning">Edit</a>
                            <form action="/my-cart/{{ $cart->product->name }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="product_id" value={{ $cart->product->id }}>
                                <button class="bg-danger border-0 btn btn-warning text-white"
                                    onclick="return confirm('Are you sure want to remove this item from cart?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="row align-items-center">
            <div class="col-auto me-auto">
                <p class="fs-4 fw-bold mb-1"> Total Price</p> IDR {{ number_format($total_price) }}
            </div>
            <div class="col-auto align-items-center">
                <a href="/my-cart/checkout" class="btn btn-warning">Checkout({{ $total_quantity }})</a>
            </div>
        </div>
    </div>
@endsection
