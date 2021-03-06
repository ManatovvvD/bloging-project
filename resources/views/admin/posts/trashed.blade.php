@extends('layouts.app')

@section('content')
<div class="card card-default">
  <div class="card-header">
      Trashed posts
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
            Restore
        </th>
        <th>
            Destroy
        </th>
    </thead>
    <tbody>
        @if($posts->count()>0)
        @foreach ($posts as $post)
        <tr>
          <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="60" height="60"></img></td>
          <td>{{$post->title}}</td>
          <td><a class="btn btn-xs btn-info " href="">Edit</a></td>
          <td><a class="btn btn-xs btn-success" href="{{route('post.restore',['id' => $post->id])}}">Restore</a></td>
          <td><a class="btn btn-xs btn-danger" href="{{route('post.kill',['id' => $post->id])}}">Delete</a></td>
        </tr>
        @endforeach
        @else
        <tr>
          <th colspan="5" class="text-center">No trashed posts</th>
        </tr>
        @endif
    </tbody>
</table>
</div>

@stop
