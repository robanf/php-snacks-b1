<?php
    
    $nome= $_GET['nome'];
    $email= $_GET['email'];
    $eta= $_GET['eta'];


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
    

    <p>
        <?php

            if(strlen($nome)>3 && strpos($email,'@')==true && strpos($email,'.')==true && is_numeric($eta)==true){
                echo 'Accesso Riuscito';
            }
            else{
                echo 'Accesso Negato';
            };
        ?>
    </p>
</body>
</html>