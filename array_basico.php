<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array basico</title>
</head>
<body>
   
    <?php
    //sequenciais(numericos)
      // $lista_frutas = array('banana','maçã','morango','uva','abacate');
      /*$lista_frutas = ['banana','maçã','morango','uva','abacate'];
       $lista_frutas[]='abacaxi';
      echo '<pre>';
       var_dump($lista_frutas);
       echo '</pre>';
       echo '<hr/>';
       echo '<pre>';
       print_r($lista_frutas);
       echo '</pre>';
       //selecionar um item do array

       echo $lista_frutas[2];*/
       
       //associativos(valores sao associados explicitamente aos elementos dos arrays)
       /*$lista_frutas = array('a'=>'banana',
                             'b'=>'maçã',
                             'x'=>'morango',
                             'z'=>'uva',
                             '2'=>'abacate');*/
             $lista_frutas =['a'=>'banana',
                             'b'=>'maçã',
                             'x'=>'morango',
                             'z'=>'uva',
                             '2'=>'abacate'];
        //adicionando novos elementos
        $lista_frutas['w']='abacaxi';


        echo'<pre>';
        var_dump($lista_frutas);
        echo'</pre>';
        echo $lista_frutas['x'];
        echo '<hr/>';
        echo $lista_frutas['2'];
        echo '<hr/>';
       
        echo '<hr/>';
        echo $lista_frutas['w'];
    ?>
  
</body>
</html>