<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Podsumowanie zamówienia</title>
<body>

<?php
    $donut = $_POST['donut'];
    $bread = $_POST['bread'];
    $apple_pie = $_POST['applepie'];
    $together = 0.99*$donut + 1.50*$bread + 10.50*$apple_pie;
echo<<<END

    <h2> Summary of your order </h2>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>Donuts (0.99 zl/pcs)</td><td>$donut</td>
    </tr>
    <tr>
        <td>Bread (1.50 zl/pcs)</td><td>$bread</td>
    </tr>
    <tr>
        <td>Apple pie (10.50 zl/pcs)</td><td>$apple_pie</td>
    </tr>
    <tr>
        <td>Together to pay</td><td>$together zł </td>
    </tr>
    </table>
    <br> <a href='index.php'> Go back </a>
END;

?>
</body>
</head>
</html>