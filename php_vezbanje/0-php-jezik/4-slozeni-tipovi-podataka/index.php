<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Slozeni tipovi podataka</h1>
    <hr>
    <ol>
        <li>Nizovi</li>
        <li>Objekti</li>
        <li>Resource</li>
    </ol>
    <hr>
    <?php
        $kursevi = ['front end', 'back end', 'full stack', 'WordPress'];
        echo "Nas novi kurs pocinje za 16 dana i on je na indeksu 2 i to je - $kursevi[2]";
        echo '<hr>';
        $radionice = Array('30 dana kodiranja', 'Custom WP teme', 'Prakticni veb dizajn');
        echo '<b>Webcon</b> prvo radi radionicu ' . $radionice[1] . ' zatim  ' . $radionice[0] . ' i na kraju krece u novom formatu koji cemo uskoro objaviti i ' . $radionice[2];
        echo '<hr>';
        $parniBrojevi = [2, 4, 6, 8, 10];
        echo $parniBrojevi;
        echo '<pre>';
        var_dump($parniBrojevi);
        echo '</pre>';
        echo '<hr>';
        $prakticni = ['html', 'css', 'WordPress', 2, ['sass', 'themify'], null];
        echo "Ovaj kurs trajace $prakticni[3] meseca";
        echo '<hr>';
        echo 'Prvog meseca ucimo ' . $prakticni[0] . ', ' . $prakticni[1] . ' i na kraju meseca ' . $prakticni[4][0];
        echo '<hr>';
        echo 'Drugog meseca ucimo ' . $prakticni[2] . ' i ' . $prakticni[4][1];
    ?>
</body>
</html>