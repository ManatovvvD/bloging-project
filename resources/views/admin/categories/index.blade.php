@extends('layouts.app')

@section('content')
<div class="card card-default">
  <div class="card-header">
      Categories
  </div>
<table class="table table-hover">
    <thead>
        <th>
            Category name
        </th>
        <th>
            Editing
        </th>
        <th>
            Deleting
        </th>
    </thead>
    <tbody>
      @if($categories -> count() > 0)
        @foreach ($categories as $category)
        <tr>
            <td>
                {{ $category -> name}}
            </td>
            <td>
                <a href="{{route('category.edit',['id' => $category->id])}}" class="btn btn-xs btn-info">
                <span class="glyphicon glyphicon-minus">
                    edit
                </span>
                </a>
            </td>
            <td>
                <a href="{{route('category.delete',['id' => $category->id])}}" class="btn btn-xs btn-danger">
                <span class="glyphicon glyphicon-trash">
                    delete
                </span>
                </a>
            </td>
        </tr>

        @endforeach
        @else
        <tr>
          <th colspan="5" class="text-center">No categories yet.</th>
        </tr>
        @endif
    </tbody>
</table>
</div>

@stop
