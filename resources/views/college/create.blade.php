@extends('layouts.app')

@section('content')
    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="card text-left">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Add College</h3>
                    <a href="{{ route('college.index') }}" class="btn btn-outline-warning">Go Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action=" {{route('college.store')}} " method="post">
                    @csrf
                    <div>
                        <div class="form-group">
                            <label for="note_text">College Name</label>
                          <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Add College</button>

                </form>
            </div>
         </div>
    </div>
@endsection
