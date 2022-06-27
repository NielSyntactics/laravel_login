@extends('layouts.app')

@section('content')
    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="container my-3">
            @include('includes.message')
        </div>
        <div class="card text-left">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                <form action="{{ route('login.authenticate')}}" method="POST">
                    @csrf
                    <div class="form-group form-inline">
                        <div class="form-group mb-3">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
