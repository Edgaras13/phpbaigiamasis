<?php
$distance = rand(100, 1000);
$fuel_100km = 7.5;
$fuel_price = 1.3;
$fuel_used = $fuel_100km / 100 * $distance;
$cost = $fuel_used * $fuel_price;
$print = "Nuvaziavus $distance km, masina sunaudos $fuel_used l kuro. Kaina: $cost pinigu.";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1><?php print $print; ?></h1>

    </body>
</html>