@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="row-md-5">
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
            <form class="bg-light p-4" action="/login" method="POST">
                @csrf
                {{-- Buat nampilin flash message dari controller --}}
                <p class="fs-3 mb-3 text-primary">Welcome Back</p>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="Enter email" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        id="password" placeholder="Password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="floatingInput">Password</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="rememberMe" type="checkbox" value="checked">
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
