<!DOCTYPE html>
<html>

<head>
  <title>Product Details</title>
</head>

<body>
  <?php require_once 'menu.html'; ?>

  <h1>Product Detail</h1>
  <hr>

  <?php
  // To get the id in URI. If there is no ID we display a error message
  if (isset($_GET['id'])) {

    // Make sure it is a number I get
    $productID = (int) $_GET['id'];

    // Make sure it's an number AND a valid ID
    if ($productID > 0) {

      // Now I can try to retrieve data from DATABASE
      require_once 'database.php';

      // Connection to the DB
      $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

      // If there is a problem connecting to the DB, display error msg, otherwise run query
      if ($db_handle) {

        // Prepare query
        $sql_query = 'SELECT p.*, c.name as cName 
        FROM product p
        INNER JOIN category c ON p.cat_id = c.cat_id 
				WHERE product_id = ' . $productID;

        // Run the query on the DB
        $result_query = mysqli_query($db_handle, $sql_query);
        // Get results as associative array with key/value pair. Key is the name of attribut you get from database.
        $db_field = mysqli_fetch_assoc($result_query);

        // Displaying details about a product
        echo '<img width="300px" src="./src/' . $db_field['picture'] . '" alt="' . $db_field['name'] . '">';
        echo '<p><strong>Name : </strong>' .
          '<a href="product.php?id=' . $db_field['product_id'] . '">' . $db_field['name'] . '</a></p>';
        echo '<p><strong>Category : </strong>' . $db_field['cName'] . '</p>';
        echo '<p><strong>Price : </strong>' . $db_field['price'] . '€</p>';
        echo '<p><strong>Description : </strong>' . $db_field['description'] . '€</p>';

        // We also need to get related product within the same category
        echo '<hr>';
        echo '<h3>Related products</h3>';

        $sql_query = 'SELECT p.*, c.name as cName 
        FROM product p
        INNER JOIN category c ON p.cat_id = c.cat_id 
        WHERE c.cat_id = ' . $db_field['cat_id'] . '
        AND p.product_id != ' . $db_field['product_id'];

        // Run the query on the DB
        $result_query = mysqli_query($db_handle, $sql_query);
        // Get results as associative array with key/value pair. Key is the name of attribut you get from database.
        while ($db_field = mysqli_fetch_assoc($result_query)) {
          // Display all category related products
          // Displaying details about a product
          echo '<div style="width:300px;float:left">';
          echo '<img width="200px" src="./src/' . $db_field['picture'] . '" alt="' . $db_field['name'] . '">';
          echo '<p><strong>Name : </strong>' .
            '<a href="product.php?id=' . $db_field['product_id'] . '">' . $db_field['name'] . '</a></p>';
          echo '<p><strong>Category : </strong>' . $db_field['cName'] . '</p>';
          echo '<p><strong>Price : </strong>' . $db_field['price'] . '€</p>';
          echo '<p><strong>Description : </strong>' . $db_field['description'] . '€</p>';
          echo '</div>';
        }
      } else {
        echo 'DB not found (' . DB_NAME . ')';
      }

      mysqli_close($db_handle);
    } else {
      echo 'Something\'s wrong...';
      echo '<a href="./">Go Back</a>';
    }
  } else {
    echo 'Something\'s wrong...';
    echo '<a href="./">Go Back</a>';
  }
  ?>

</body>

</html>