@extends('layouts.main')

@section('container')
    <div class="container">
        <div>
            <div class="row">
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
            <form class="bg-light p-4" action="/register" method="post">
                @csrf
                <p class="fs-3 mb-3 text-primary">Join With Us</p>
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                        placeholder="Full Name" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror"
                        placeholder="Email" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="floatingInput">Email</label>
                </div>
                <div class="mb-2">
                    <div class="text-start mb-1">
                        Gender
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="gender_id" type="radio" value="1" required>
                        <label class="form-check-label" for="gender_id">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="gender_id" type="radio" value="2" required>
                        <label class="form-check-label" for="gender_id">Female</label>
                    </div>
                    @error('gender_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control  @error('address') is-invalid @enderror" name="address" rows="3"
                        placeholder="Address" style="height: 100px" required></textarea>
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="floatingInput">Address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror"
                        placeholder="Password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="floatingInput">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password_confirmation"
                        class="form-control  @error('password_confirmation') is-invalid @enderror"
                        placeholder="Confirm Password" required>
                    @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="floatingInput">Cofirmation Password</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="agree" type="checkbox" value="checked">
                    <label class="form-check-label" for="flexCheckChecked">
                        I agree with terms & condition
                    </label>
                </div>
                <div class="mt-3 text-end">
                    <button type="submit" class="btn btn-warning">Register Now</button>
                </div>
            </form>
        </div>
    </div>
@endsection
