<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Obrada porudzbine</h1>
    <hr>
    <h3><?php echo 'Podaci se obradjuju'; ?></h3>
    <p>Uskoro saljemo podatke za uplatu</p>
    <?php echo '<hr>'; ?>
    <?php
        echo "<h3>Porudzbina obradjena u </h3>";
        echo date('H:i, jS F Y');
    ?>
</body>
</html>