<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Multidimenzionalni nizovi</h1>
    <hr>
    <?php
    // numericki nizovi
        $telefoni = ['huawei', 'iphone', 'samsung', 'xiaomi', 'nokia'];
        $voce = array('kruska', 'jabuka', 'sljiva', 'dunja', 'kajsija');
    // asocijativni nizovi
        $kudaNaMore = [
            'gr' => 'greece',
            'cro' => 'croatia',
            'ita' => 'italy'
        ];
        echo $kudaNaMore['gr'].'<hr>';
        echo $kudaNaMore['cro'].'<hr>';
        echo $kudaNaMore['ita'].'<hr>';
    // multidimenzionalni nizovi
        $webconEkipa = [
            'Sloba Miric' => [
                'Novi Sad',
                'WordPress development',
                'WordPress'
            ],
            'Danilo Vesovic' => [
                'Sarajevo',
                'Back end development',
                'php'
            ],
            'Boban Nalic' => [
                'Backa Palanka',
                'WordPress development',
                'WordPress'
            ],
            'Srdjan Srdjanov' => [
                'Novi Sad',
                'Front end development',
                'Javascript'
            ]
        ];
        echo '<pre>';
        print_r($webconEkipa);
        echo '</pre>';

        echo '<hr>';

        $rezultatiTest = [
            0 => [
                'Petar Dragovic',
                [
                    'ocena' => 5
                ]
            ],
            1 => [
                'Mihajlo Popovic',
                [
                    'ocena' => 3
                ]
            ],
            2 => [
                'Ermin Spahic',
                [
                    'ocena' => 4
                ]
            ],
            3 => [
                'Milica Malovic',
                [
                    'ocena' => 2
                ]
            ]
        ];

        echo '<pre>';
        print_r($rezultatiTest);
        echo '</pre>';

    ?>
</body>
</html>