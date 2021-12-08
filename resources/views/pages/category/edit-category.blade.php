@extends('layouts.main')

@section('container')
    <div class="container">
        <form class="bg-light p-4" action="/categories/{{ $category->name }}" method="post"
            enctype="multipart/form-data">
            @method('put')
            @csrf
            <p class="fs-3 mb-3 text-primary">Edit Category</p>
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    placeholder="Category Name" value="{{ $category->name }}" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <label for="floatingInput">Category</label>
            </div>
            <div class="mt-3 text-end">
                <button type="submit" class="btn btn-warning">Save</button>
            </div>
        </form>
    </div>
@endsection
