<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Funkcije</h1>
    <hr>
    <?php
        function fullStackKurs() {
            echo 'Startujemo za 10 dana<br>';
        }
        fullStackKurs();

        echo '<hr>';

        function noviPrgramiWebcona($rodjendanski, $radionice, $kursevi) {
            echo "Za dve nedelje imamo <b>$rodjendanski</b> program, neke radionice na popustu<br>";
            echo "Za koji dan krece novi - stari WordPress program <b>$radionice</b><br>";
            echo "A za 10 dana krece prvi <b>$kursevi</b><br>";
        }
        noviPrgramiWebcona('30 dana kodiranja', 'WordPress', 'Full Stack Kurs');
        echo '<hr>';

        function mnozenje($broj1, $broj2) {
            echo $broj1 * $broj2;
        }
        mnozenje(3, 20);
        echo '<hr>';

        function sabiranje($x = 0, $y = 0) {
            echo $x + $y;
        }
        sabiranje(2);
        echo '<hr>';

        // scope

        // ovde je vise analogija sa opcijom let u js, imamo block scope
        $radionica1 = 'kodiranje uzivo sredom';
        function upis() {
            global $radionica1;
            echo $radionica1;
        }
        upis();

    ?>
</body>
</html>