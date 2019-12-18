<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        
        echo $date;
        $arr = ['First_Name' => 'Nour', 'Last_Name' => 'nech', 'Address' => 'belval', 'Post_Code' => 'L-2255',
         'City'=> 'luxembourg', 'Email' => 'nour@gmail.com', 'Telephone' => '123456789', 'Birthday' => date("D-M-Y", mktime(11/11/1999))];

        foreach ($arr as $key => $value) {
            echo '<li>'. $key .' '. $value.'</li>';
         }
        ?>
    </ul>
</body>

</html>