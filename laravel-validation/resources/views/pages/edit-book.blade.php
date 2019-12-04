<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

  <form>
    @csrf
    <input type="text" name="title" value="{{$book->title}}">
    <input type="text" name="author" value="{{$book->author}}">
    <input type="submit" value="Update">
  </form>
  <div id="resultForm"></div>

  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script>
    $(function() {
      $('input[type="submit"]').click(function(e) {
        e.preventDefault();
        $.ajax({
          url: '/books/{{$book->id}}',
          type: 'put',
          data: $('form').serialize(),
          success: function(result) {
            $('#resultForm').html('<div class="green">' + result + '</div>');
          },
          error: function(err) {
            // If ajax errors happens
          }
        });
      });
    });
  </script>
</body>

</html>