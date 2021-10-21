@extends('layouts.main')

@section('container')
    <div class="container-fluid d-flex flex-row justify-content-center">
        <div class="card mb-3" style="width: 100%;">
            <div class="row g-0">
                <div class="col-md-8">
                    <img src="https://source.unsplash.com/random/750x750" alt="image" class="img-fluid rounded-start"
                        style="height: 60em; width: 60em">
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
                            @can('user')
                                <li class="list-group item">
                                    <form class="row row-cols-lg-auto g-3 align-items-center mt-2" method="POST">
                                        @csrf
                                        <div class="col-12">
                                            <div class="form-check">
                                                <label class="form-check-label" for="inlineFormCheck">
                                                    Qty
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <input type="number" class="form-control" name="quantity">
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-warning">Add to cart</button>
                                        </div>
                                    </form>
                                </li>
                            @endcan
                            @guest
                                <li class="list-group item">
                                    <form class="row row-cols-lg-auto g-3 align-items-center mt-2" method="POST">
                                        @csrf
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-warning">Login to buy</button>
                                        </div>
                                    </form>
                                </li>

                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
