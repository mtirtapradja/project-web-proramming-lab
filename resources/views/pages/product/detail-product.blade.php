@extends('layouts.main')

@section('container')
    {{-- <div class="container-fluid d-flex flex-row justify-content-center">
        <img src="https://source.unsplash.com/random/750x750" alt="image" class="img-fluid rounded-start"
            style="height: 46.875em; width: 46.875em">
        <div class="bg-light">
            <div class="container d-flex align-items-center">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <p class="fs-4 fw-bold">{{ $product->name }}</p>
                    </li>
                    <li class="list-group-item">
                        Category
                        <p class="fs-4 fw-bold">{{ $product->category->name }}</p>
                    </li>
                    <li class="list-group-item">
                        Price
                        <p class="fs-4 fw-bold">IDR {{ $product->price }}</p>
                    </li>
                    <li class="list-group-item">
                        Description
                        <p>{{ $product->description }}</p>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
