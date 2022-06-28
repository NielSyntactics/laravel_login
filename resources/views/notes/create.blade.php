@extends('layouts.app')

@section('content')
    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="card text-left">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Add Notes</h3>
                    <a href="{{ route('notes.index') }}" class="btn btn-outline-warning">Go Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action=" {{route('notes.store')}} " method="post">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex justify-content-end">
                                <label for="note_text">Note Text</label>
                            </div>
                        </div>
                        <div class="col">
                            <textarea class="form-control @error('note_text')
                                border border-danger
                            @enderror" name="note_text"></textarea>
                            <button type="submit" class="btn btn-primary mt-3">Add Note</button>
                        </div>
                    </div>
                </form>
            </div>
         </div>
    </div>
@endsection
