@extends('layouts.main')

@section('container')

@section('container')
    <div class="col align-self-center">
        <div class="card bg-light p-2">
            <div class="card-body">
                <h2 class="mb-3 text-primary">Join With Us</h2>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control-lg" placeholder="Full Name">
                    </div>
                    <div class="mb-2">
                        <div class="text-start mb-1">
                            Gender
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="gender" type="radio" value="male">
                            <label class="form-check-label" for="inlineCheckbox1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="gender" type="radio" value="female">
                            <label class="form-check-label" for="inlineCheckbox2">Female</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="3" placeholder="Address" required></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control-lg" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control-lg" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control-lg" placeholder="Confirm Password">
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
    </div>
@endsection

@endsection
