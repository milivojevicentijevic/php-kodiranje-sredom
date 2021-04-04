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
        input[type="text"] {
            padding: 10px;
        }
        input[type="submit"] {
            background-color: red;
            color: white;
            padding: 10px 20px;
            font-size: 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: .3s ease;
        }
        input[type="submit"]:hover {
            background-color: black;
        }
    </style>
</head>
<body>
    <h1>Porudzbenica</h1>
    <hr>
    <form action="poruci.php" method="post">
        <table>
            <tr>
                <td>Uredjaji</td>
                <td>Kolicina</td>
            </tr>
            <tr>
                <td>Telefoni</td>
                <td><input type="text" name="telefon"></td>
            </tr>
            <tr>
                <td>Laptopovi</td>
                <td><input type="text" name="laptop"></td>
            </tr>
            <tr>
                <td>Desktop racunari</td>
                <td><input type="text" name="desktop"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Potvrdi kupovinu"></td>
            </tr>
        </table>
    </form>
</body>
</html>