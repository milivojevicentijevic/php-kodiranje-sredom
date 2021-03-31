<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Asocijativni nizovi</h1>
    <hr>
    <?php
        $webcon_predavaci = [
            '30 dana' => 'Slobodan Miric',
            'Custom WP teme' => 'Boban Nalic'
        ];
        echo '<pre>';
        var_dump($webcon_predavaci);
        echo '</pre>';
        echo "<h3>Za 3 nedelje pocinje radionica Custom WP teme i novi predavac je : " . $webcon_predavaci['Custom WP teme'] .  "</h3>";
        echo "<hr>";
        $webcon_predavaci['Prakticni veb dizajn'] = 'Srdjan Srdjanov';
        echo '<pre>';
        var_dump($webcon_predavaci);
        echo '</pre>';
    ?>
</body>
</html>