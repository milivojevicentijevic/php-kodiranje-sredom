<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Stringovi</h1>
    <hr>
    <?php
        $phpProgramiranje = 'Jedan od popularnih PHP frejmworka je laravel i svakako odlicna serverska tehnologija';
        echo $phpProgramiranje;
        echo '<hr>';

        $pas = '<p>Frida je pas <b>crne boje</b> i rase je <b>koker spanijel</b></p>';
        echo $pas;
        echo '<hr>';
        $ukulele = 'Prvo sam kupio \'fender\' a posle \'Ivans guitar\' ukulele instrument';
        echo $ukulele;
        echo '<hr>';
        $varijabla = 'varijabla';
        $vidljivost = 'vidljiva';
        echo 'Unutar jednostrukih navodnika vidljive su varijable ali samo sa konkatenacijom, evo i njih ' . $varijabla . ' je ' . $vidljivost;
        echo '<hr>';
        echo "Unutar dvostrukih navodnika $vidljivost je $varijabla";
    ?>
</body>
</html>