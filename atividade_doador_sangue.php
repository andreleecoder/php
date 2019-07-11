<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> atividade fix doador de sangue</title>
</head>
<body>

    <?php
    $idade_doador=18;
    $peso_doador=56;
    if(($idade_doador>=16&&$idade_doador<=69)&&$peso_doador>=50){
        echo'atende aos requisitos';
    }else{
        echo 'não atende aos requisitos';
    }
  
   ?>

  
</body>
</html>