@extends('layouts.main')

@section('container')
    <div class="container-fluid d-flex flex-row justify-content-center">
        <div class="row-md-5">
            {{-- Buat nampilin flash message dari controller --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            @endif
        </div>
        <div class="card mb-3" style="width: 100%;">
            <div class="row g-0">
                <div class="col-md-8">
                    <img src={{ asset('storage/' . $cart->product->image_url) }} alt="image"
                        class="img-fluid rounded-start" style="height: 60em; width: 60em">
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <p class="fs-4 fw-bold">{{ $product->name }}</p>
                            </li>
                            <li class="list-group-item">
                                <p class="fs-4 fw-bold">Category:</p>
                                <p class="fs-5 fw-light">{{ $product->category->name }}</p>
                            </li>
                            <li class="list-group-item">
                                <p class="fs-4 fw-bold">Price:</p>
                                <p class="fs-5 fw-light">IDR {{ $product->price }}</p>
                            </li>
                            <li class="list-group-item">
                                <p class="fs-4 fw-bold">Description:</p>
                                <p class="fs-5 fw-light">{{ $product->description }}</p>
                            </li>
                            <li class="list-group item">
                                <form action="/my-cart/{{ $cart->product->name }}"
                                    class="row row-cols-lg-auto g-3 align-items-center mt-2" method="POST">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="user_id" value={{ auth()->user()->id }}>
                                    <input type="hidden" name="product_id" value={{ $product->id }}>
                                    <input type="hidden" name="price" value={{ $product->price }}>
                                    <div class="row p-0">
                                        <div class="col-2">
                                            <div class="form-check">
                                                <label class="form-check-label" for="inlineFormCheck">
                                                    Qty
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <input type="number"
                                                class="form-control @error('quantity')
                                            is-invalid @enderror"
                                                name="quantity" value={{ $cart->quantity }} required>
                                            @error('quantity')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3">
                                            <button type="submit" class="btn btn-warning">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
