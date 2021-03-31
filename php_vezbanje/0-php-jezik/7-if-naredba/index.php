<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>if naredba</h1>
    <hr>
    <?php
        if (3 == 13) {
            echo 'Uslov je tacan';
        } else {
            echo 'Uslov nije tacan';
        }
        echo '<hr>';
        $zbir = 0;
        $brojevi = [2, 3, 4, 8, 9];
        if (count($brojevi) > 0) {
            foreach($brojevi as $broj) {
                $zbir = $zbir + $broj;
            }
            echo "Rezultat: " . $zbir; 
        } else {
            echo "Zbir: 0";
        }
    ?>
</body>
</html>