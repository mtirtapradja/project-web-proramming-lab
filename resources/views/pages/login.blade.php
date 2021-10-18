@extends('layouts.main')

@section('container')
    <div class="col-md-5">
        {{-- Buat nampilin flash message dari controller --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif

        {{-- Buat nampilin flash message dari controller --}}
        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <form class="bg-light p-4" action="/login" method="POST">
                @csrf
                {{-- Buat nampilin flash message dari controller --}}
                <p class="fs-3 mb-3 text-primary">Welcome Back</p>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                        required>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label" for="">
                        Remember me
                    </label>
                </div>
                <div class="mt-3 text-end">
                    <button class="btn btn-warning" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
