@extends('layouts.app')

@section('content')
<div class="card card-default">
  <div class="card-header">
      Posts
  </div>
<table class="table table-hover">
    <thead>
        <th>
            Image
        </th>
        <th>
            Title
        </th>
        <th>
            Edit
        </th>
        <th>
            Treshed
        </th>
    </thead>
    <tbody>
      @if($posts -> count() > 0)
        @foreach ($posts as $post)
        <tr>
          <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="60" height="60"></img></td>
          <td>{{$post->title}}</td>
          <td><a class="btn btn-xs btn-info " href="{{route('post.edit',['id' => $post->id])}}">Edit</a></td>
          <td><a class="btn btn-xs btn-danger" href="{{route('post.delete',['id' => $post->id])}}">Trash</a></td>
        </tr>
        @endforeach
        @else
        <tr>
          <th colspan="5" class="text-center">No published posts</th>
        </tr>
        @endif
    </tbody>
</table>
</div>

@stop
