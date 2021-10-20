@extends('layouts.main')

@section('container')
    <div class="container">
        <form class="bg-light p-4" action="/categories/{{ $category->id }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <p class="fs-3 mb-3 text-primary">Edit Category</p>
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Product Name" required>
            </div>
            <div class="mt-3 text-end">
                <button type="submit" class="btn btn-warning">Save</button>
            </div>
        </form>
    </div>
@endsection
