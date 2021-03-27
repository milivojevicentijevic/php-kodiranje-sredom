<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Prosti tipovi podataka</h1>
    <hr>
    <ol>
        <li>Brojevi</li>
        <li>Boolean</li>
        <li>Null</li>
    </ol>
    <?php
        echo 2 * 2 + 150 - 60;
        echo '<br>';
        echo (3 + 12) / 3;
        echo '<br>';
        echo 13 % 6;
        echo '<br>';
        $prviBroj = 30;
        $drugiBroj = 40;
        $mnozenje = $prviBroj * $drugiBroj;
        echo $mnozenje;
        echo '<br>';
        echo 'Rezultat mnozenja je ' .$mnozenje;
        echo '<br>';
        var_dump($mnozenje);
        echo '<br>';
        $ispravnaTvrdnja = true;
        $neistinitaTvrdnja = false;
        echo $ispravnaTvrdnja;
        echo '<br>';
        echo $neistinitaTvrdnja;
        var_dump($neistinitaTvrdnja);
        echo '<br>'; 
        $noviKursevi = null;
        var_dump($noviKursevi);
    ?>
</body>
</html>