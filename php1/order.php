<!DOCTYPE >
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
</head>

<body>

<h1>Zamówienie Online</h1>

<?php

$paczki=$_POST['paczki'];
$grzebienie=$_POST['grzebienie'];
   
$order=$paczki*0.99+$grzebienie*1.29;

echo<<<END
    <h2> Podsumowanie zamówienia </h2>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <td>Ilość pączków</td>
        <td>$paczki</td>
    </tr>
    <tr>
        <td>Ilość grzebieni</td>
        <td>$grzebienie</td>
    </tr>
    <tr>
        <td>Wartość Zamówienia</td>
        <td>$order PLN</td>
    </tr>
    </table>
    <br><a href="index.php">powrót do strony głównej</a> 
END;

?>

</body>
</html>