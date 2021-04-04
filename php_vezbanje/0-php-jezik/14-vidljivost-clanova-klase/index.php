<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Vidljivost clanova klase</h1>
    <hr>
    <?php
    class Zaposleni {
        public $ime;
        private $jmbg;
    }

    $zaposleni1 = new Zaposleni();
    $zaposleni1 -> ime = 'Slobodan Miric';
    // $zaposleni1 -> jmbg = '0805'; ne moze ovo
    
    ?>
</body>
</html>