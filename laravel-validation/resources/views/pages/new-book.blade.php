<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

  {{-- @error('title')
  <p>Error is : {{$message}}</p>
  @enderror --}}

  @foreach($errors->all() as $error)
  {{ $error }}
  @endforeach

  <form action="/books" method="post">
    @csrf

    <input type="text" name="title">
    <input type="number" name="price">
    <input type="submit" value="Send">


  </form>


</body>

</html>