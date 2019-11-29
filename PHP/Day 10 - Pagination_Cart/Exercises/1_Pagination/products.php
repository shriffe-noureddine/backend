<!DOCTYPE html>
<html>

<head>
  <title>Movies List</title>
</head>

<body>
  <?php require_once 'menu.html'; ?>

  <h1>Movies list</h1>
  <hr>

  <?php

  require_once 'database.php';

  $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
  $db_found = mysqli_select_db($db_handle, DB_NAME);

  if ($db_found) {

    // First I need to get the total number of products.
    $sql_query = 'SELECT COUNT(*) as Count FROM product';
    $result_query = mysqli_query($db_handle, $sql_query);
    $db_field = mysqli_fetch_assoc($result_query);
    $productNumber = $db_field['Count'];
    // Now I can calculate number of pages based on number of items I want to display on each page 
    $pagesNumber = (int) ceil(7 / 2);

    // Then I need to get the page's number
    // If there is not I will display the first page
    if (isset($_GET['page']) && ((int) $_GET['page'] > 0) && ((int) $_GET['page'] < $pagesNumber)) {

      // Get the limit/offset to deal with pagination
      $limit = 2 * (((int) $_GET['page']) - 1);
      $sql_query = "SELECT p.*, c.name as cName 
      FROM product p
      INNER JOIN category c ON p.cat_id = c.cat_id  
      ORDER BY p.name
      LIMIT $limit, 2";

      $result_query = mysqli_query($db_handle, $sql_query);

      // Display the products
      while ($db_field = mysqli_fetch_assoc($result_query)) {
        echo '<hr>';
        echo '<img width="200px" src="./src/' . $db_field['picture'] . '" alt="' . $db_field['name'] . '">';
        echo '<p><strong>Name : </strong>' .
          '<a href="product.php?id=' . $db_field['product_id'] . '">' . $db_field['name'] . '</a></p>';
        echo '<p><strong>Category : </strong>' . $db_field['cName'] . '</p>';
        echo '<p><strong>Price : </strong>' . $db_field['price'] . '€</p>';
      }

      // Display pagination
      if ($pagesNumber > 1) {
        for ($i = 1; $i <= $pagesNumber; $i++) {
          echo "<a href='products.php?page=$i'>" . $i . "</a>";
        }
      }
    } else {
      header('Location: products.php?page=1');
    }
  } else {
    echo 'DB not found (' . DB_NAME . ')';
  }
  ?>

</body>

</html>