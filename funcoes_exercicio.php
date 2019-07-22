<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercicio php</title>
</head>
<body>
   
    <?php
    function calcularImpostoDeRenda($salario){  
        if($salario<=1903.99){
            return"isento";
        }elseif ($salario==1903.99&&$salario<=2826.65) {
            return "7.5%";
        }elseif ($salario==2826.66&&$salario<=3751.05) {
            return "15%";
        }elseif ($salario==3751.06&&$salario<=4664.68) {
            return "22.5%";
        }elseif ($salario>=4664.68) {
            return "27.5%";
         }
        }
    echo calcularImpostoDeRenda(5000);
   ?>
  
</body>
</html>