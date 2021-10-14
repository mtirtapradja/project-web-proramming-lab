@extends('layouts.main')

@section('container')

@section('container')
    <div class="container">
        <form class="bg-light p-4">
            <p class="fs-3 mb-3 text-primary">Join With Us</p>
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Full Name">
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-2">
                <div class="text-start mb-1">
                    Gender
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="gender" type="radio" value="1">
                    <label class="form-check-label" for="inlineCheckbox1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="gender" type="radio" value="2">
                    <label class="form-check-label" for="inlineCheckbox2">Female</label>
                </div>
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="address" rows="3" placeholder="Address" required></textarea>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="mb-3">
                <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="">
                <label class="form-check-label" for="flexCheckChecked">
                    I agree with terms & condition
                </label>
            </div>
            <div class="mt-3 text-end">
                <button type="submit" class="btn btn-warning">Register Now</button>
            </div>
        </form>
    </div>


    {{-- <div class="col align-self-center">
        <div class="card bg-light p-2">
            <div class="card-body">
                <h2 class="mb-3 text-primary"></h2>
                <form action="/register" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control-lg" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control-lg" placeholder="Email">
                    </div>
                    <div class="mb-2">
                        <div class="text-start mb-1">
                            Role
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="role" type="radio" value="1">
                            <label class="form-check-label" for="inlineCheckbox1">Admin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="role" type="radio" value="2">
                            <label class="form-check-label" for="inlineCheckbox2">User</label>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="text-start mb-1">
                            Gender
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="gender" type="radio" value="1">
                            <label class="form-check-label" for="inlineCheckbox1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="gender" type="radio" value="2">
                            <label class="form-check-label" for="inlineCheckbox2">Female</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="address" rows="3" placeholder="Address" required></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control-lg" placeholder="Password">
                    </div>
                     <div class="mb-3">
                        <input type="password" name="confirmPassword" class="form-control-lg" placeholder="Confirm Password">
                    </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label" for="flexCheckChecked">
                            I agree with terms & condition
                        </label>
                    </div>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-warning">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
@endsection

@endsection
