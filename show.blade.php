@extends('layout')

@section('content')
<h1 class="title">{{$category->name}}</h1>

<div class="content">
  {{$category->name}}
</div>

<p>
<a href="/categories/{{$category->id}}/edit">Edit</a>
</p>
@endsection
