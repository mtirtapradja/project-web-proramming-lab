@extends('layouts.main')

@section('container')
    <div class="container">
        <form class="bg-light p-4" action="/" method="post">
            @csrf
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
                    <input class="form-check-input" name="gender_id" type="radio" value="1">
                    <label class="form-check-label" for="inlineCheckbox1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="gender_id" type="radio" value="2">
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
@endsection
