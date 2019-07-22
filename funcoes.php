<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>funções na prática</title>
</head>
<body>
   
    <?php
    /* ao escrever nomes de funções uma boa pratica é usar um verbo no infinitivo
     seguidos de substantivos*/
     //função void, sem retorno
     function exibirBoasVindas(){
         echo "Bem vindos ao curso de php";
     }
     exibirBoasVindas();
        echo'<br/>';
     //função com retorno
     function calcularAreaTerreno($comprimento,$largura){
         $area=$comprimento*$largura;
         return $area;
     }
    echo calcularAreaTerreno(7,9);
   ?>
  
</body>
</html>