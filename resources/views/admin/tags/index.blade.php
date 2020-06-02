@extends('layouts.app')

@section('content')
<div class="card card-default">
  <div class="card-header">
      Tags
  </div>
<table class="table table-hover">
    <thead>
        <th>
            Tags name
        </th>
        <th>
            Editing
        </th>
        <th>
            Deleting
        </th>
    </thead>
    <tbody>
      @if($tags -> count() > 0)
        @foreach ($tags as $tag)
        <tr>
            <td>
                {{ $tag -> tag}}
            </td>
            <td>
                <a href="{{route('tag.edit',['id' => $tag->id])}}" class="btn btn-xs btn-info">
                <span class="glyphicon glyphicon-minus">
                    edit
                </span>
                </a>
            </td>
            <td>
                <a href="{{route('tag.delete',['id' => $tag->id])}}" class="btn btn-xs btn-danger">
                <span class="glyphicon glyphicon-trash">
                    delete
                </span>
                </a>
            </td>
        </tr>

        @endforeach
        @else
        <tr>
          <th colspan="5" class="text-center">No tags yet.</th>
        </tr>
        @endif
    </tbody>
</table>
</div>

@stop
