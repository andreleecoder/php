<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>loops Do whille </title>
</head>
<body>
   
    <?php
    $x=10;
    do {
        echo'Entrou no do while';
        //continue e break podem ser usados aqui
    } while ($x < 9);
    echo'<hr/>';
    while($x > 9){
        echo'Entrou no while';
        break;

    }
  
    ?>
  
</body>
</html>