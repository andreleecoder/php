<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array pesquisa</title>
</head>
<body>
   
    <?php
        //in_array()
        //array_search
        $lista_frutas=['banana','maçã','morango','uva'];
       /* echo'<pre>';
        print_r($lista_frutas);
        echo'</pre>';
        echo'<br/>';
        //array_search retorna o indice do elemento pesquisado dentro do array
       $existe = array_search('uva',$lista_frutas);
       //in_array informa se o elemento do array existe ou nao atraves de valores booleanos(true 1/false 0)
       $existe = in_array('abacaxi',$lista_frutas);
       if ($existe != null) {
           echo "sim, o valor pesquisado existe no Array";
       }else{
           echo "Não, o valor pesquisado não existe no array";
       };*/
        $lista_coisas=['frutas'=>$lista_frutas,
                        'pessoas'=>['João','Maria']
    ];
        echo'<br/>';
        echo'<pre>';
        print_r($lista_frutas);
        echo'</pre>';
        echo in_array('uva',$lista_coisas['frutas']);
        
    ?>
  
</body>
</html>