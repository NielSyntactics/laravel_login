@extends('layouts.app')

@section('content')
    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="card text-left">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>College</h3>
                    <a href="{{route('college.create')}}" class="btn btn-outline-primary">Add Colleges</a>
                </div>
            </div>
            <div class="card-body">
                @if (count($colleges) == 0)
                    <div class="text-center">
                        <h1>No Colleges Found</h1>
                    </div>
                @else
                    @foreach ($colleges as $college)
                        <div class="d-flex justify-content-between">
                            <p> {{$college->name}} </p>
                            <div>
                                <a href="{{ route('college.edit', $college->id) }}" class="btn btn-outline-warning">Edit</a>
                                <form action="{{ route('college.destroy', $college->id) }}" method="post">
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
