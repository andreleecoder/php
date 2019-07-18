<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>casting de tipos</title>
</head>
<body>

    <?php
       //gettype()=>retorna o typo da variavel
       $valor=15.35;
       //$valor2=(real)$valor;//float,doble,real
       //$valor2=(string)$valor;//float,doble,real
       //$valor2=(int)$valor; //float, doble,real
       //$valor2=(string)$valor;//
       
       echo $valor.''.gettype($valor);
       echo '<br/>';
       echo $valor2.''.gettype($valor2);
       echo '<br/>';
      // echo $valor3.''.gettype($valor3);

   ?>

  
</body>
</html>