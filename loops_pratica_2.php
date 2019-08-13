<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>loops na pratica 2 </title>
</head>
<body>
   
    <?php
    $funcionarios=[
        ['Nome'=>'João','salário'=>2500],
        ['Nome'=>'Maria','salário'=>3000],
        ['Nome'=>'Júlia','salário'=>2200]
        
        ];
    echo"<pre>";
    print_r($funcionarios);
    echo"</pre>";

    
    foreach ($funcionarios as $idx => $funcionario) {
    foreach ($funcionario as $idx2 => $valor) {
        echo "$idx2-$valor <br/>";
    }
    echo '<hr/>';   
    }
    ?>
  
</body>
</html>