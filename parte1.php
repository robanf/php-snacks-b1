<?php

    $partite=[
            [
                'casa'=>'Milano',
                'punteggioCasa'=>rand(50,130),
                'avversari'=>'Cefalù',
                'punteggioavv'=>rand(50,130),
            ],
            [
                'casa'=>'Pizzocalabro',
                'punteggioCasa'=>rand(50,130),
                'avversari'=>'Carrapipi',
                'punteggioavv'=>rand(50,130),
            ],
            [
                'casa'=>'Donnalucata',
                'punteggioCasa'=>rand(50,130),
                'avversari'=>'Sampieri',
                'punteggioavv'=>rand(50,130),
            ],
    ];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
        <ul>
        <?php for($i=0;$i<count($partite);$i++){?>
            <li>

                 <?php   echo $partite[$i]['casa'] . "-" .  $partite[$i]['avversari'] . ' | ' . $partite[$i]['punteggioCasa'] . '-' . $partite[$i]['punteggioavv']; ?>
                

            </li>
            <?php } ?>
        </ul>
</body>
</html>