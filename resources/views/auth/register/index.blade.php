@extends('layouts.app')

@section('content')
    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="container my-3">
            @include('includes.message')
        </div>
        <div class="card text-left">
            <div class="card-header">
                Register
            </div>
            <div class="card-body">
                <form action="{{ route('register.store')}}" method="POST">
                    @csrf
                    <div class="form-group form-inline">
                        <div class="form-group mb-3">
                            <label for="fullname">Complete Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email_input">Email address</label>
                            <input type="email" class="form-control" id="email_input" name="email_input">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>

                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
