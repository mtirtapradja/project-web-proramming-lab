@extends('layouts.main')

@section('container')
    <div class="container">
        <form class="bg-light p-4" action="/products/{{ $product->name }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <p class="fs-3 mb-3 text-primary">Edit Product</p>
            <div class="form-floating mb-3 ">
                <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                    placeholder="Product Name" value="{{ $product->name }}" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <label for="floatingPassword">Name</label>
            </div>
            <div class="form-floating mb-3 ">
                <textarea class="form-control  @error('description') is-invalid @enderror" name="description" rows="3"
                    placeholder="Product Description" style="height: 10em;" required>{{ $product->description }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <label for="floatingPassword">Description</label>
            </div>
            <div class="form-floating mb-3 ">
                <input type="number" name="price" class="form-control" placeholder="Product Price"
                    value="{{ $product->price }}" required>
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <label for="floatingPassword">price</label>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $product->category->id }}" selected>{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image_url" class="form-label">Product Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image_url') is-invalid @enderror" type="file" id="image_url"
                    name="image_url">
                @error('image_url')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mt-3 text-end">
                <button type="submit" class="btn btn-warning">Save</button>
            </div>
        </form>
    </div>
@endsection
