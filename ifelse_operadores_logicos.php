<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> if else operadores logicos</title>
</head>
<body>

    <?php
    //operador AND ou &&  retorna verdadeiro se todos os resultados forem verdadeiro
    // o operador OR ou || retorna verdadeiro se pelo menos um dos resultados forem verdadeiros
    // o operador XOR  retorna verdadeiro, de uma das expressões for verdadeira e a outra falsa
    //! inverte o resultado retornado pela expressão
    //parenteses() servem para estabelecer precedencia, oq estiver entre eles será resolvido primeiro
     if(!('a'=='b')){
         echo 'verdadeiro';

     }
     else{
       echo 'falso';
     }
   ?>
  
</body>
</html>