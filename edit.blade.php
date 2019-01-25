@extends('layout')

@section('content')
<h1 class="title">Edit Categories</h1>


<form method="post" action="/categories/{{ $category->id }}">
  {{method_field('PATCH')}}
  {{csrf_field()}}

  <div class="field">
    <label class="label" for="name">Category name</label>
    <div class="control">
      <input type="text" class="input" name="name" placeholder="Category name" value="{{$category->name}}">
    </div>
  </div>

  <div class="field">
    <div class="control">
      <button type="submit" class="button is-link">Update Category</button>

    </div>
  </div>
  </form>
  <form method="post" action="/categories/{{$category->id}}">
    {{method_field('DELETE')}}
    {{csrf_field()}}

    <div class="field">
      <div class="control">
        <button type="submit" class="button">Delete Category</button>

      </div>
    </div>
  </form>




@endsection
