<?php
    $matchArray = [
        [
            'casa' => [
                'nome' => 'calzini puzzolenti',
                'punti' => 65
            ],
            'sfidanti' => [
                'nome' => 'ratti selvaggi',
                'punti' => 43
            ]
        ],
        [
            'casa' => [
                'nome' => 'cani rabbiosi',
                'punti' => 69
            ],
            'sfidanti' => [
                'nome' => 'criceti assassini',
                'punti' => 82
            ]
        ],
        [
            'casa' => [
                'nome' => 'humus bollito',
                'punti' => 12
            ],
            'sfidanti' => [
                'nome' => 'pozzanghere insaponate',
                'punti' => 13
            ]
        ],
        [
            'casa' => [
                'nome' => 'bava bavarese',
                'punti' => 27
            ],
            'sfidanti' => [
                'nome' => 'papere esplose',
                'punti' => 20
            ]
        ],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <a href="../index.php">index</a>
    <?php
        foreach ($matchArray as $matchKey => $matchValues){
            echo '<div>'.$matchValues['casa']['nome'].' - '.$matchValues['sfidanti']['nome'].' | '.$matchValues['casa']['punti'].' - '.$matchValues['sfidanti']['punti'].'</div>';
        }
    ?>
</body>
</html>