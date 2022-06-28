@extends('layouts.app')

@section('content')
    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="card text-left">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Notes</h3>
                    <a href="{{route('notes.create')}}" class="btn btn-outline-primary">Add Notes</a>
                </div>
            </div>
            <div class="card-body">
                @if (count($notes) == 0)
                    <div class="text-center">
                        <h1>No Notes Found</h1>
                    </div>
                @else
                    @foreach ($notes as $note)
                        <div class="d-flex justify-content-between">
                            <p> {{$note->note_text}} </p>
                            <form action="{{ route('notes.destroy', $note->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </div>
                        <hr>
                    @endforeach
                @endif
            </div>
         </div>
    </div>
@endsection
