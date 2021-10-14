@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="d-flex justify-content-center">
            <form class="bg-light p-4">
                <p class="fs-3 mb-3 text-primary">Welcome Back</p>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label" for="flexCheckChecked">
                        Remember me
                    </label>
                </div>
                <div class="mt-3 text-end">
                    <button type="submit" class="btn btn-warning">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
