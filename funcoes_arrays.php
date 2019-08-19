<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>funões array </title>
</head>
<body>
   
    <?php
   /* $array=['coberta','travesseiro','conchinha'];
    $retorno=is_array($array);
    if($retorno==true){
        echo "sim, a variável é um array";
    }else {
        echo"Não, a variável nao é um array";
    }*/
   /* $array=[
        1=>'a',
        2=>'b',
        5=>'c'
    ];
    echo'<pre>';
    print_r($array);
    echo'</pre>';
    $retorno=array_keys($array);
    echo'<pre>';
    print_r($retorno);
    echo'</pre>';*/

   $array=['coberta','travesseiro','conchinha'];
    
    echo'<pre>';
    print_r($array);
    echo'</pre>';

    sort($array);
    echo'<pre>';
    print_r($array);
    echo'</pre>';*/

    $array=['coberta','travesseiro','conchinha'];
    
    echo'<pre>';
    print_r($array);
    echo count($array);
    echo'</pre>';

    asort($array);
    echo'<pre>';
    print_r($array);
    echo'</pre>'; 
    $array1=['banana','uva','maçã'];
    $array2=['feijão','arroz','macarrão'];
    $array3=['pão','café', 'manteiga'];
    $arrAyTudo=array_merge($array1,$array2,$array3);

    echo'<pre>';
    print_r($arrAyTudo);
    echo'</pre>';

    $string="20/04/19";
    $array_explode=explode("/",$string);
    echo'<pre>';
    echo $string;
    print_r($array_explode);
    echo $array_explode[2].'-'.$array_explode[1].'-'.$array_explode[0];
    echo'</pre>'; 
    
   $array=["a","b","c","d"];

    echo'<pre>';
    print_r($array);
    echo'</pre>';

   $juntar= implode(',', $array);
    echo $juntar;


    ?>
  
</body>
</html>