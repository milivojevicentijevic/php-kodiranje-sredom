<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Konstruktori</h1>
    <hr>
    <?php
    class Zaposleni {
        public $ime;
        public $godinaRodjenja;
        public $brojGodina;

        function __construct($argIme, $argGodinaRodjenja) {
            $this->ime = $argIme;
            $this->godinaRodjenja = $argGodinaRodjenja;
        }

        public function izracunajGodine() {
            $this->brojGodina = date('Y') - $this->godinaRodjenja;
            echo $this->ime . ' ima ' . $this->brojGodina . ' godina. Ima jos dosta do penzije.<br>';
        }
    }

    $zaposleni1 = new Zaposleni('Slobodan', 1977);
    $zaposleni1 -> izracunajGodine();
    
    echo '<hr>';

    $zaposleni1 = new Zaposleni('Tamara', 1976);
    $zaposleni1 -> izracunajGodine();

    echo '<hr>';

    ?>
</body>
</html>