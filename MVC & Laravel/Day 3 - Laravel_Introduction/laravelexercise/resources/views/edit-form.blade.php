<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" placeholder="Movie title" value="{{ $movie->title }}"><br>
    <input type="submit" name="submit" value="SEND">
  </form>
</body>

</html>