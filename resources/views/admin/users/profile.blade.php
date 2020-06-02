@extends('layouts.app')
@section('content')

@include('admin.includes.errors')


    <div class="card card-default">
        <div class="card-header">
            Edit your profile
        </div>
        <div class="card-body">
            <form action="{{route('user.profile.update')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Username</label>
                <input type="text" name="name" value="{{$user->name}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">email</label>
                <input type="text" name="email" value="{{$user->email}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">New password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Upload a new avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="name">Facebook profile </label>
                    <input type="text" name="facebook" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Youtube profile </label>
                    <input type="text" name="youtube" class="form-control">
                </div>

                <div class="form-group">
                    <label for="about">About you</label>
                    <textarea name="about" id="about" cols="6" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update profile
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@stop
