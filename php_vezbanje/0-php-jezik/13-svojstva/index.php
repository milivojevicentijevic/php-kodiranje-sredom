<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Svojstva</h1>
    <hr>
    <?php
    class Zaposleni {
        public $ime = 'Sloba Miric';
    }

    $zaposleni1 = new Zaposleni();
    $zaposleni1 -> ime = 'Slobodan Miric';
    var_dump($zaposleni1);
    echo '<hr>';
    echo $zaposleni1->ime . " je nas prvi zaposleni<br>";
    
    ?>
</body>
</html>