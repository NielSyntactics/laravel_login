@extends('layouts.app')

@section('content')
    <div class="container m-auto w-50 pt-5 pb-5">
        <div class="my-3">
            @include('includes.message')
        </div>
        <div class="card text-left">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Edit General Information</h3>
                </div>
            </div>
            <div class="card-body">
                <form action=" {{route('user.updateBasicInformation',$user->id)}} " method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="orgname">Organization Name</label>
                        <input type="text" class="form-control" id="orgname" name="orgname" aria-describedby="emailHelp" placeholder="Enter Organization Name" value="{{$user->information->orgname}}">
                    </div>
                    <div class="form-group">
                        <label for="adviser">Adviser Name</label>
                        <input type="text" class="form-control" id="adviser" name="adviser" aria-describedby="emailHelp" placeholder="Enter Adviser Name" value="{{$user->information->adviser}}">
                    </div>
                    <div class="form-group">
                        <label for="college_id">College</label>
                        <select class="form-control" id="college_id" name="college_id">
                            @foreach ($colleges as $college)
                                <option value="{{$college->id}}" @if ($user->information->college_id == $college->id)
                                    selected
                                @endif>{{$college->name}}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="representative">Representative Name</label>
                        <input type="text" class="form-control" id="representative" name="representative" aria-describedby="emailHelp" placeholder="Enter Representative Name" value="{{$user->information->representative}}">
                    </div>

                    <div class="form-group">
                        <label for="vision">Vision</label>
                        <textarea class="form-control" id="vision" name="vision" rows="3">{{$user->information->vision}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="mission">Mission</label>
                        <textarea class="form-control" id="mission" name="mission" rows="3">{{$user->information->mission}}</textarea>
                    </div>
                    <input type="submit" value="Edit General Information" class="btn btn-primary mt-3">
               </form>
            </div>
         </div>

        <div class="my-5">

        </div>

        <div class="card text-left">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Edit Email Information</h3>
                </div>
            </div>
            <div class="card-body">
                <form action=" {{route('user.updateEmail',$user->id)}} " method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="email_input">Email address</label>
                        <input type="email" class="form-control" id="email_input" name="email_input" value="{{$user->email}}">
                    </div>
                    <input type="submit" value="Edit Email Information" class="btn btn-primary mt-3">
               </form>
            </div>
        </div>

        <div class="my-5">

        </div>

        <div class="card text-left">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Edit Password</h3>
                </div>
            </div>
            <div class="card-body">
                <form action=" {{route('user.updatePassword',$user->id)}} " method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="oldpassword">Old Password</label>
                        <input type="password" class="form-control" id="oldpassword" name="oldpassword">
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>

                    <input type="submit" value="Edit Email Information" class="btn btn-primary mt-3">
               </form>
            </div>
        </div>


        <div class="my-5">

        </div>

        <div class="card text-left">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Edit Image</h3>
                </div>
            </div>
            <div class="card-body">
                <form action=" {{route('user.updateImage',$user->id)}} " method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp" placeholder="Enter image">
                    </div>

                    <input type="submit" value="Add New Image" class="btn btn-primary mt-3">
               </form>
            </div>
        </div>
    </div>

@endsection
