<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    function convert($sum, $currency)
    {
        $priceDollar = 1.085965;
        if ($sum < 0) {
            echo 'The amount must be greater than 0';
        } elseif ($currency != 'EUR' AND $currency != 'USD') {
            echo 'The currency must be USD OR EUR';
        } elseif ($currency == 'EUR') {
            echo $sum . ' Euro = ' . $sum * $priceDollar . ' american dollar';
        } else {
            echo $sum . ' Dollar = ' . $sum / $priceDollar . ' Euro';
        }
    }
    convert(5, "USD");

    ?>
</body>

</html>