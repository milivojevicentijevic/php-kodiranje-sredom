<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        .radionica {
            text-transform: uppercase;
        }
        .predavac {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Petlje</h1>
    <hr>
    <?php
        // echo 'Ucimo petlje' . '<hr>';
        // echo 'Ucimo petlje' . '<hr>';
        // echo 'Ucimo petlje' . '<hr>';
        // echo 'Ucimo petlje' . '<hr>';
        // echo 'Ucimo petlje' . '<hr>';
        // echo 'Ucimo petlje' . '<hr>';

        $brojac = 0;
        while ($brojac < 7) {
            echo "<p>$brojac : Ponavljanje </p>";
            $brojac++;
        }
        echo '<hr>';
        for ($i = 0; $i < 7; $i++) {
            echo "<p>$i : Ponavljanje </p>";
        }
        echo '<hr>';

        $kodiranjeUzivoSredom = ['html', 'css', 'js', 'php', 'bootstrap', 'sass', 'wordpress','themify','elementor'];
        for ($i = 0; $i < count($kodiranjeUzivoSredom); $i++) {
            echo "<p>$kodiranjeUzivoSredom[$i]</p>";
        }

        $porodica = ['Sloba', 'Tamara', 'Jovana', 'Marko'];
        foreach ($porodica as $clan) {
            echo $clan . "<br>";
        }
        echo '<hr>';
        
        $webcon = [
            '30 dana' => 'Sloba Miric',
            'Custom WP' => 'Boban Nalic',
            'Prakticni veb dizajn' => 'Srdjan Srdjanov'
        ];
        foreach ($webcon as $key => $value) {
            echo $key . ' : ' . $value . '<hr>';
        }

    ?>

    <?php foreach($webcon as $radionica => $predavac): ?>
        <h3><span class="radionica"><?php echo $radionica; ?></span> <span class="predavac"><?php echo $predavac; ?></span></h3>
    <?php endforeach; ?>
</body>
</html>