@extends('layouts.main')

@section('container')
    <div class="container">
        <form class="bg-light p-4" action="/products" method="post" enctype="multipart/form-data">
            @csrf
            <p class="fs-3 mb-3 text-primary">Insert New Product</p>
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Product Name" required>
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="description" rows="3" placeholder="Product Description"
                    required></textarea>
            </div>
            <div class="mb-3">
                <input type="number" name="price" class="form-control" placeholder="Product Price" required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mt-3 text-end">
                <button type="submit" class="btn btn-warning">Add</button>
            </div>
        </form>
    </div>
@endsection
