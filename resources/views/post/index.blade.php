@extends('layouts.app')

@section('content')

    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="card">
            <div class="card-header">
                <x-cardheader title="Post List" linkText="Add Post" route="{{ route('post.create') }}"  />
            </div>
            <div class="card-body">
                @if (count($posts) == 0)
                    <div class="text-center">
                        <p>No Post in the List</p>
                    </div>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Photos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        @foreach ($post->photos as $photo)
                                            <a href="#">{{$photo->filename}}</a>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
