@extends('layouts.app')

@section('content')
    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="card">
            <div class="card-header">
                <h2>Show Files</h2>
            </div>
            <div class="card-body">
                <div class="row mt-4">
                    <ul class="list-group list-group-flush">
                        @foreach ($files as $file)
                            <li class="list-group-item d-flex justify-content-between">
                                <div class="d-flex">
                                    <a href="{{ asset('files/'.$file->user_id.'/'.$file->name) }}">{{$file->truename}}.{{$file->extension}}</a>
                                </div>
                                <div>
                                    <form action="{{ route('file.delete', $file->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
