@extends('layouts.app')

@section('content')
    <div class="container m-auto w-50 pt-5 pb-5">

        <div class="my-3">
            @include('includes.message')
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Upload File</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="files" class="form-label mt-4">Upload Product Image</label>
                        <input
                            type="file"
                            name="files[]"
                            id=""
                            class="form-control"
                            accept="files/*"
                            multiple>
                    </div>
                    <input type="submit" value="Add Files" class="btn btn-primary mt-5">
                </form>
            </div>
        </div>
    </div>

@endsection
