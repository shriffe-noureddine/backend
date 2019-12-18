<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    .wrong {
        color: red;
    }

    .success {
        color: green;
    }
</style>

<body>
    <?php require_once "database.php";
    $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    $drop = "SELECT year_of_prod FROM movies ";

    $result = mysqli_query($connect, $drop);


    ?>
    <form action="#" method="POST">

        <input type="text" name="title" placeholder="title"><br>
        <input type="text" name="directors" placeholder="directors"><br>
        <input type="text" name="actors" placeholder="actors"><br>
        <input type="text" name="productor" placeholder="productor"><br>

        <select name="year_of_prod">
        <?php
        $year_array = [];
        while ($row = mysqli_fetch_assoc($result)){
           $year_array[] = $row;
        }
        echo "<option value='" .$row['year_of_prod']."'</option>";
        
        ?>

        </select>

        <input type="year" name="year_of_prod" placeholder="year_of_prod"><br>
        <input type="text" name="language" placeholder="language"><br>
        <input type="text" name="category" placeholder="category"><br>

        <input type="text" name="synopsis" placeholder="synopsis"><br>
        <input type="text" name="video" placeholder="video link"><br>
        <input type="submit" name="submit" value="add"><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (strlen($_POST['title']) < 5)
            echo '<h3 class="wrong">Title feild must be at least 6 charectors </h3>';

        elseif (strlen($_POST['directors']) < 5)
            echo '<h3 class="wrong">directors feild must be at least 6 charectors </h3>';

        elseif (strlen($_POST['actors']) < 5)
            echo '<h3 class="wrong">actors feild must be at least 6 charectors </h3>';

        elseif (strlen($_POST['synopsis']) < 5)
            echo '<h3 class="wrong">synopsis feild must be at least 6 charectors </h3>';
        else {

            $title = $_POST['title'];
            $directors = $_POST['directors'];
            $actors = $_POST['actors'];
            $productor = $_POST['productor'];
            $year_of_prod = $_POST['year_of_prod'];
            $language = $_POST['language'];
            $category = $_POST['category'];
            $synopsis = $_POST['synopsis'];
            $video = $_POST['video'];
            $add_query = "INSERT INTO movies(title, directors, actors, productor, year_of_prod, language, category, synopsis, video)
            VALUES ('$title','$directors','$actors','$productor','$year_of_prod','$language','$category','$synopsis','$video')";
            $add_result = mysqli_query($connect, $add_query);
            echo '<h3 class="success">The movie added successfully </h3>';
        }
        var_dump($_POST);
    }

    ?>
</body>

</html>