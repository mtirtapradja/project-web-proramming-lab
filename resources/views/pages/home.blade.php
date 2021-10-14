@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        @foreach ($products as $product)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="#" class="card-img-top" alt="Image">
                    <div class=" card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p>
                            <small class="text-muted">
                                IDR {{ $product->price }}
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
