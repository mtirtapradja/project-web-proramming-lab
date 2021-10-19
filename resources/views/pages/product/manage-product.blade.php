@extends('layouts.main')

@section('container')
    <p class="fs-1 text-center mb-5">Manage Products</p>
    <table class="table table-warning table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Product Image</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Description</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>Isi pake images nanti</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                        <a href="/products/{{ $product->name }}/edit"
                            class="badge bg-warning text-decoration-none text-black">Update</a>
                        <form action="/products/{{ $product->name }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
