<?php

  // 1 . For
  for ($i=0; $i < 10 ; $i++) { 
    # code...
  }

  for ($i=0; $i < 10 ; $i++) { 
    //echo 'Hello<br>';
  }

  // 2 . While
  $a = 11;
  while ($a <= 9) {
    # code...
  }

  while ($a <= 9) {
    //echo 'Hello<br>';
    $a++;
  }

  // 3 . Do...While
  do {
    # code...
  } while ($a <= 9);

  // 4. For...Each
  
  // For...Each loop is designed to work with array
  $movies = array(
    'NightCrawler', 
    'Star Wars', 
    'Bright'
  );

  foreach ($movies as $key => $value) {
    echo $key . ' => ' . $value . '<br>';
  }

  // $^value and $key are temporary variables
  foreach ($movies as $position => $movie) {
    $movie = 'Fight Club';
    echo $movie . ' / ' . $movies[$position] . '<br>';
    //echo $value . '<br>';
  }

  echo '<hr>';

  // Shortest way
  foreach ($movies as $movie) {
    echo $movie . '<br>';
  }


?>