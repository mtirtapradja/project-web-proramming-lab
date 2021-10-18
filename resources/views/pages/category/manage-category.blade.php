@extends('layouts.main')

@section('container')
    <p class="fs-1 text-center mb-5">Manage Categories</p>
    <table class="table table-warning table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="/dashboard/posts/{{ $category->slug }}/edit"
                            class="badge bg-warning text-decoration-none text-black">Update</a>
                        <form action="/dashboard/posts/{{ $category->slug }}" method="POST" class="d-inline">
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
