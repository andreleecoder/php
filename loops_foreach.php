<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>loops foreach </title>
</head>
<body>
   
    <?php
    $itens=['sofá','mesa','cadeira','geladeira'];
    echo'<pre>';
    print_r($itens);
    echo'</pre>';
    foreach ($itens as $item ) {
        echo "$item";
        if($item==='mesa'){
            echo '(*compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras*)';
        }
        echo '<br/>';
        
    }

    ?>
  
</body>
</html>