@extends('layouts.app')
@section('content')

@include('admin.includes.errors')


    <div class="card card-default">
        <div class="card-header">
            Edit tag: {{$tag->tag}}
        </div>
        <div class="card-body">
            <form action="{{route('tag.update',['id' => $tag->id])}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Tag</label>
                    <input type="text" name="tag" value="{{$tag->tag}}" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            update tag
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@stop
