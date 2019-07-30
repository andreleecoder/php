<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array multidimensional</title>
</head>
<body>
   
    <?php
    //$lista_coisas=array();
    $lista_coisas=[];
    $lista_coisas['frutas'] = array(1=>'banana',
                                    2=>'maçã',
                                    3=>'morango',
                                    4=>'uva');

    $lista_coisas['pessoas'] =[1=>'João',
                               2=>'José',
                               3=>'Maria'];  
    //recuperando elementos do array
    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';
    echo'<hr>';
    echo $lista_coisas['frutas'][3];
    echo'<hr>';
    echo $lista_coisas['pessoas'][3];
    ?>
  
</body>
</html>