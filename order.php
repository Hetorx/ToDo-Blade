<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Podsumowanie zamówienia</title>
<body>

<?php
    $paczki = $_POST['paczki'];
    $grzebien = $_POST['grzebien'];
    $suma = 0.99*$paczki + 1.50*$grzebien;
echo<<<END

    <h2> Podsumowanie zamówienia </h2>

    <table border="1" cellpadding="10" cellspacing="0">w
    <tr>
        <td>Paczek (0.99 zł/szt</td><td>$paczki</td>
    </tr>
    <tr>
        <td>Grzebien (1.50 zł/szt)</td><td>$grzebien</td>
    </tr>
    <tr>
        <td>SUMA</td><td>$suma zł </td>
    </tr>
    </table>
    <br> <a href='index.php'> Powrót </a>
END;


?>


</body>
</head>
</html>