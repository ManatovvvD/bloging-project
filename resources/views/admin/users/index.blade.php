@extends('layouts.app')
@section('content')
<div class="card card-default">
  <div class="card-header">
      Users
  </div>
<table class="table table-hover">
    <thead>
        <th>
            Image
        </th>
        <th>
            Name
        </th>
        <th>
            Permissions
        </th>
        <th>
            Delete
        </th>
    </thead>
    <tbody>
      @if($users -> count() > 0)
        @foreach ($users as $user)
            <td><img src="asset()" alt="" /></td>
          <td>{{$user->name}}</td>
          <td>
            @if($user->admin)
              <a href="{{route('user.not.admin',['id' => $user->id])}}" class="btn btn-xs btn-danger">Remove Admin</a>

            @else
              <a href="{{route('user.admin',['id' => $user->id])}}" class="btn btn-xs btn-success">Make Admin</a>
            @endif
          </td>
          <td><a class="btn btn-xs btn-danger" >Trash</a></td>
        </tr>
        @endforeach
        @else
        <tr>
          <th colspan="5" class="text-center">No user</th>
        </tr>
        @endif
    </tbody>
</table>
</div>

@stop
