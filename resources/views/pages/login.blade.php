@extends('layouts.main')

@section('container')
    <div class="col align-self-center">
        <div class="card bg-light p-2">
            <div class="card-body">
                <h2 class="mb-3 text-primary">Welcome Back</h2>
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control-lg" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control-lg" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label" for="flexCheckChecked">
                            Remember me
                        </label>
                    </div>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-warning">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
