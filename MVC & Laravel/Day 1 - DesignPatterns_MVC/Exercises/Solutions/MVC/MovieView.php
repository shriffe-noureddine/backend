<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>My Movies Page</title>
</head>

<body>

  <h1>Movies list</h1>
  <hr>

  <?php


  foreach ($movies as  $movie) {
    echo '<hr>';
    //echo $db_field['movie_id() . '<br>'; 
    echo '<img href="' . $movie->get_poster() . '" alt="' . $movie->get_title() . '">';
    echo '<p><strong>Title : </strong>' .
      '<a href="MovieController.php?id=' . $movie->get_movie_id() . '">' . $movie->get_title() . '</a></p>';
    echo '<p><strong>Year of release : </strong>' . $movie->get_release_year() . '</p>';
  }

  ?>
</body>

</html>