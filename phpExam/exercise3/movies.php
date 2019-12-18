<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href=""></a>
    <?php require_once "database.php";
    $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    $movies_query = "SELECT title, directors, year_of_prod, movie_id FROM movies ";

    $movies_result = mysqli_query($connect, $movies_query); ?>

    <table style="width:100%">
        <col width="80">
        <col width="80">
        <col width="80">
        <col width="80">
        <tr>
            <th>Title</th>
            <th>directors</th>
            <th>year</th>
            <th>more</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($movies_result)) { ?>
            <tr>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo  $row['directors'] ?></td>
                <td><?php echo $row['year_of_prod'] ?></td>
                <td><a href="detail.php?movie_id=<?php echo $row['movie_id'] ?>">more</a></td>
            </tr>
        <?php } ?>



    </table>

</body>

</html>