@extends('layouts.app')
@section('content')

@include('admin.includes.errors')


    <div class="card card-default">
        <div class="card-header">
            Create a new user
        </div>
        <div class="card-body">
            <form action="{{route('user.store')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Add user
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@stop
