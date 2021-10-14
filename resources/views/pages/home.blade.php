@extends('layouts.main')

@section('container')
    {{-- @foreach ($products as $product)
        <div class="card" style="width: 18rem;">
            <img src="#" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->price }}</p>
                <a href="#" class="btn btn-warning">Buy</a>
            </div>
        </div>
    @endforeach --}}

    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-3">
                <div class="card">
                    {{-- <div class="position-absolute bg-dark px-3 py-2 text-white"
                            style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="# class=" text-white text-decoration-none">
                                {{ $post->category->name }}
                            </a>
                        </div> --}}
                    <img src="#" class="card-img-top" alt="Image">
                    <div class=" card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p>
                            <small class="text-muted">
                                By. <a href="#" class="text-decoration-none">{{ $product->price }}</a>
                                {{-- {{ $post->created_at->diffForHumans() }} --}}
                            </small>
                        </p>
                        {{-- <p class="card-text">{{ $post->excerpt }}</p> --}}
                        <a href="#" class="btn btn-warning">More detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
