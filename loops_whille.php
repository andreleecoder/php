<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>loops whille </title>
</head>
<body>
   
    <?php
    $num=1;
    echo"--inicio do loop--<br/>";
     while ($num<10) {
       
         $num+=1;//critério de parada
         if($num==2||$num==6){
             continue;
         }
         echo"$num <br/>";
         /*if($num>100){
             break;
         }*/
     }
    echo"--fim do loop--";
    ?>
  
</body>
</html>