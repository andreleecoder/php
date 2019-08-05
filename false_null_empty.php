<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>false null e empty</title>
</head>
<body>
   
    <?php
    //false(true/flse)=tipo de variavel
    //null e empty = valores especiais
    // o valor nul quando declarado é sempre null
    // empty e false qndo declarados

    $funcionario1=null;
    $funcionario2='';
    $funcionario3=false;
    //valores null
    if (is_null($funcionario1)) {
        echo 'sim, a variável é null';
    }else{
        echo'nao, a variavel nao é null';
    }
    echo"<br/>";
    //valores vazios
    if (empty($funcionario2)) {
        echo 'sim, a variável está vazia';
    }else{
        echo'nao, a variavel nao está vazia';
    }
    ?>
  
</body>
</html>