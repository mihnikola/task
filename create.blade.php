<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Create a New Category</h1>
    <form action="/categories" method="post">

      {{ csrf_field() }}


      <div>
        <input type="text" name="name" placeholder="Category name" value="{{old('name')}}">
      </div>

      <div>
        <button type="submit">Create Category</button>
      </div>

      @if($errors->any())
      <div class="notification is-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>

      </div>
      @endif
    </form>
  </body>
</html>
