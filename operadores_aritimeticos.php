<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>operadores aritimeticos</title>
</head>
<body>

    <?php
      $num1=13;
      $num2=4;
      echo 'A soma entre $num1 e $num2 é, '.($num1+$num2);
      echo '<br/>';
      echo 'A subtração entre $num1 e $num2 é, '.($num1-$num2);
      echo '<br/>';
      echo 'A multiplicação entre $num1 e $num2 é, '.($num1*$num2);
      echo '<br/>';
      echo 'A divisão entre $num1 e $num2 é, '.($num1/$num2);
      echo '<br/>';
      echo 'O módulo entre $num1 e $num2 é, '.($num1%$num2);
      echo '<hr/>';
      //operadores aritimeticos na atribuição de valores
      //isso serve para todos os operadores aritimeticos
      $x = 10;
      $x += 5;
      echo $x;
      echo '<hr/>';
      $y=8;
      $y -=5;
      echo $y;
      echo '<hr/>';
      //operadoers de incremento e decremento
      $a=10;
      //$a++;
      $a--;
      echo $a


   ?>

  
</body>
</html>