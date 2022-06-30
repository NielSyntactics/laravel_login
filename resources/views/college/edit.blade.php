@extends('layouts.app')

@section('content')
    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="card text-left">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Edit College</h3>
                    <a href="{{ route('college.index') }}" class="btn btn-outline-warning">Go Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action=" {{route('college.update', $college->id)}} " method="post">
                    @csrf
                    @method('PUT')
                    <div>
                        <div class="form-group">
                            <label for="note_text">College Name</label>
                          <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $college->name }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning mt-3">Edit College</button>
                </form>
            </div>
         </div>
    </div>
@endsection
