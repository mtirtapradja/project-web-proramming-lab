@extends('layouts.main')
@section('container')
    //TODO coba pake si product yang udah di past dari controller disini
    @foreach ($products as $product)
        <h3>{{ $product->name }}</h3>
        <h3>{{ $product->price }}</h3>
    @endforeach
@endsection
