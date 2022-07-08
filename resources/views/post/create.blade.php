@extends('layouts.app')

@section('content')

    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="card">
            <div class="card-header">
                <x-cardheader title="Create Post" linkText="Go back" route="{{ route('post.index') }}"  />
            </div>
            <div class="card-body">
                <form action="{{ route('post.store') }}" method="POST">
                    @csrf
                    <x-forms.input label="Post Name" type="text" name="title" id="title" placeholder="post name"/>
                    <x-forms.input label="Post Photo" type="text" name="photos" id="photos" placeholder="post photos"/>
                    <button type="submit" class="btn btn-primary mt-3">Add post</button>
                </form>
            </div>
        </div>
    </div>


@endsection
