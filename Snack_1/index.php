<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->
<!-- Olimpia Milano - Cantù | 55-60 -->

<?php

$games = [
    [
        'homeTeam' => 'Roma',
        'awayTeam' => 'Lazio',
        'homeScore' => 1000,
        'awayScore' => 0
    ],
    [
        'homeTeam' => 'Fiorentina',
        'awayTeam' => 'Milan',
        'homeScore' => 1,
        'awayScore' => 1
    ],
    [
        'homeTeam' => 'Atalanta',
        'awayTeam' => 'Cagliari',
        'homeScore' => 0,
        'awayScore' => 20
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    
    <h2>Matchday 18</h2>

    <div>
        <ul>
            <?php for($i = 0; $i < count($games); $i++) { ?>
            <?php $thisGame = $games[$i]; ?>
            <li>
                <?php echo $thisGame['homeTeam'] ?>
                      -                  
                <?php echo $thisGame['awayTeam'] ?>
                      |
                <?php echo $thisGame['homeScore'] ?>
                      -
                <?php echo $thisGame['awayScore'] ?>                          
            </li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>
