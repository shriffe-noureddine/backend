<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Register</title>
</head>

<body>
  <?php require_once 'menu.html'; ?>

  <h1>Register to the website</h1>
  <br>
  <form action="" method="post">
    <input type="text" name="nickname" placeholder="nickname"><br>
    <input type="text" name="mail" placeholder="mail"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input type="submit" name="submit" value="Register">
  </form>

  <div id="resultForm"></div>

  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script>
    $(function() {
      $('input[type="submit"]').click(function(e) {
        e.preventDefault();
        $.ajax({
          url: 'register_helper.php',
          type: 'post',
          data: $('form').serialize(),
          success: function(result) {
            console.log(result);
            $('#resultForm').html(result);
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