@extends('layouts.app')

@section('content')
    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="my-3">
            @include('includes.message')
        </div>
        <div class="card text-left">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Organization</h3>
                    <a href="{{route('user.create')}}" class="btn btn-outline-primary">Add Organization</a>
                </div>
            </div>
            <div class="card-body">
                @if (count($organizations) == 0)
                    <div class="text-center">
                        <h1>No Organization Found</h1>
                    </div>
                @else
                    @foreach ($organizations as $organization)
                        <div class="d-flex justify-content-between">
                            <p> {{$organization->information->orgname}} </p>
                            <div>
                                <a href="{{ route('user.edit', $organization->id) }}" class="btn btn-outline-warning">Edit</a>
                                <form action="{{ route('user.destroy', $organization->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                @endif
            </div>
         </div>
    </div>
@endsection
