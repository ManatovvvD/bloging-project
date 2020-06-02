@extends('layouts.app')
@section('content')

@include('admin.includes.errors')


    <div class="card card-default">
        <div class="card-header">
            Create a new tags
        </div>
        <div class="card-body">
            <form action="{{route('tag.store')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Tag</label>
                    <input type="text" name="tag" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Store tag
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@stop
