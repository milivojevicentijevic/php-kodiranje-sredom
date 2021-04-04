<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            font-size: 22px;
        }
    </style>
</head>
<body>
    <h1>Logicki operatori</h1>
    <hr>
    <ol>
        <li>&& &ensp; i</li>
        <li>|| &ensp; ili</li>
        <li>!= &ensp; negacija</li>
    </ol>
    <?php
        $korisnickoIme = 'Slobex';
        $jmbg = '0805977';
        $lk = '0023310';
        $godine = 43;
        if ($korisnickoIme == 'Slobex' && $jmbg == '0805977' || $lk == '0023310') {
            echo "$korisnickoIme uspesno ste se ulogovali";
        } else {
            echo "$korisnickoIme nesto ne valja, pokusajte ponovo";
        }
        echo '<hr>';

        if ($godine != 18) {
            echo '<h4>Matori ste, i svakako nemate 18 leta</h4>';
        } else {
            echo '<h4>Nije ovaj portal za klincadiu</h4>';
        }
        echo '<hr>';

        $firma = 'webcon radionice';
        $pib = '12345';
    ?>
        <?php if($firma == 'webcon radionice' && $pib == '12345') : ?>
            <form action="">
                <input type="text" placeholder="Unesite ime pravnog lica">
                <input type="text" placeholder="Unesite poreski identifikacioni broj">
            </form>
        <?php endif; ?>

</body>
</html>