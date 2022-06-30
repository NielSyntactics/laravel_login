@extends('layouts.app')

@section('content')
    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="my-3">
            @include('includes.message')
        </div>
        <div class="card text-left">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Add Organization</h3>
                </div>
            </div>
            <div class="card-body">
               <form action=" {{route('user.store')}} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="email_input">Email address</label>
                        <input type="email" class="form-control" id="email_input" name="email_input" value="{{old('email_input')}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>

                    <div class="form-group">
                        <label for="orgname">Organization Name</label>
                        <input type="text" class="form-control" id="orgname" name="orgname" aria-describedby="emailHelp" placeholder="Enter Organization Name" value="{{old('orgname')}}">
                    </div>
                    <div class="form-group">
                        <label for="adviser">Adviser Name</label>
                        <input type="text" class="form-control" id="adviser" name="adviser" aria-describedby="emailHelp" placeholder="Enter Adviser Name" value="{{old('adviser')}}">
                    </div>
                    <div class="form-group">
                        <label for="college_id">College</label>
                        <select class="form-control" id="college_id" name="college_id">
                            @foreach ($colleges as $college)
                                <option value="{{$college->id}}" @if (old('college_id') == $college->id)
                                    selected
                                @endif>{{$college->name}}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="representative">Representative Name</label>
                        <input type="text" class="form-control" id="representative" name="representative" aria-describedby="emailHelp" placeholder="Enter Representative Name" value="{{old('representative')}}">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp" placeholder="Enter image" value="{{old('image')}}">
                    </div>
                    <div class="form-group">
                        <label for="vision">Vision</label>
                        <textarea class="form-control" id="vision" name="vision" rows="3">{{old('vision')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="mission">Mission</label>
                        <textarea class="form-control" id="mission" name="mission" rows="3">{{old('mission')}}</textarea>
                    </div>
                    <input type="submit" value="Register Organization" class="btn btn-primary mt-3">
               </form>
            </div>
         </div>
    </div>
@endsection
