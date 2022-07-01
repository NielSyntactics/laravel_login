@extends('layouts.app')

@section('content')
    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="card text-left">
            <div class="card-header">
                <h1>Send Email</h1>
            </div>
            <div class="card-body">
                <form accept="{{ route('mail.send') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="email">To</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                    </div>

                    <div class="form-group my-3">
                        <label for="body">Example textarea</label>
                        <textarea class="form-control" name="body" id="body" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
