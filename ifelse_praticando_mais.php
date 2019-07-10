<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> if else praticando mais um pouco</title>
</head>
<body>

    <?php
     $usuario_possui_cartao_loja=true;
     $valor_compra=250;

     $valor_frete=50;
     $recebeu_desconto_frete=false;
     if($usuario_possui_cartao_loja && $valor_compra>=400){
         $valor_frete=0;
         $recebeu_desconto_frete=true;

     }else if($usuario_possui_cartao_loja && $valor_compra>=300){
        $valor_frete=10;
        $recebeu_desconto_frete=true;
     }else if($usuario_possui_cartao_loja && $valor_compra>=100){
        $valor_frete=25;
        $recebeu_desconto_frete=true;
     }
   ?>
   <h1>Detalhes do pedido</h1>
   <p>Possui cartã da loja?<?=//operadção ternaria
    $usuario_possui_cartao_loja ? 'SIM':'NÃO';?></p>

   <p>valor da compra:<?= $valor_compra?></p>
   <p>Recebeu desconto no frete?
   <?php
   if($recebeu_desconto_frete==true){
       echo "SIM";
   }else{
       echo "NÃO";
   }
   ?>
   </p>
   <p>valor do frete :<?= $valor_frete?></p>
  
</body>
</html>