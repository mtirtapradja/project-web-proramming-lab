@extends('layouts.main')

@section('container')
    <div class="row">
        <p class="fs-1 text-center mb-5">New Products</p>
        @foreach ($products as $product)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/' . $product->image_url) }}" class="card-img-top img-fluid " alt="Image"
                        style="height: 24em">
                    <div class=" card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="d-flex justify-content-between">
                            <small class="text-muted">
                                IDR {{ $product->price }}
                            </small>
                            <small>{{ $product->category->name }}</small>
                        </p>
                        <a href="/products/{{ $product->name }}" class=" btn btn-warning">More detail</a>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $products->links() }}
    </div>
@endsection
