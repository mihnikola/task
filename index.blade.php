<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <h1>Categories</h1>
<ul>
    @foreach($categories as $category)
    <li>
      <a href="/categories/{{$category->id}}">{{$category->name}}</a>
    </li>
    @endforeach
  </ul>
  </body>
</html>
