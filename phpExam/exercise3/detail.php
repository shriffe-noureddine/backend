<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php require_once "database.php";
    $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    $id = $_POST['movie_id'];
    var_dump($_POST);

    $detail_query = "SELECT * FROM movies WHERE movie_id =$id";

    $detail_result = mysqli_query($connect, $detail_query);

    $detail = mysqli_fetch_assoc($movies_result);

    

    ?>

    <h1><?php echo $detail['synopsis'] ?></h1>
</body>

</html>