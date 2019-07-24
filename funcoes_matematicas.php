<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>funçoes nativas matematicas</title>
</head>
<body>
   
    <?php
    $num=7.3;
    echo $num;
    echo ceil($num);//arredonda para cima
    echo '<hr/>';
    echo floor($num);//arredonda para baixo
    echo '<hr/>';
    echo round($num);//0 e .4-> arredonda p baixo/.5 e .9-> arredonda p cima
    echo '<hr/>';
    echo rand(10,20);//gera um valor aleatório de 0 até randmax
    echo '<hr/>';
    echo getrandmax();
    echo '<hr/>';
    echo sqrt(20);//retorna a raiz quadrada de um numero
    ?>
  
</body>
</html>