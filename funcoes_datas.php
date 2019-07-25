<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>funçoes datas</title>
</head>
<body>
   
    <?php
        /*consultar a documentação do php para descobrir os tokens de recuperação de datas*/

        //recuperação da data atual/data corrente
     /*
        echo date('d').'<br/>';//dia do mes
        echo date('D').'<br/>';//dia da semana
        echo date('d/M/y H:i').'<br/>';//dia/mes/ano, horas mnutos
        echo date_default_timezone_get().'<br/>';
        date_default_timezone_set('America/Sao_Paulo').'<br/>';
        echo date('d/M/y H:i').'<br/>';*/

        $data_inicial='2019-07-25';
        $data_final='2019-08-15';
        //timestamp
        //01/01/1970--2019-07-25
        $time_inicial=strtotime($data_inicial);
        $time_final=strtotime($data_final);
        echo $data_inicial.'-'.$time_inicial.'<br/>';
        echo $data_final.'-'.$time_final.'<br/>';
        echo '<br/>';
        $diferença_times=$time_final - $time_inicial;
        echo '<br/>';
        echo"A diferença de segundos entre a data inicial e final é,$diferença_times";
        echo '<br/>';
        $segundos_existem_dias=24*60*60;
        echo '<br/>';
        echo $diferenca_de_dia_entre_datas=$diferença_times / $segundos_existem_dias;
        echo '<br/>';
        echo"A diferença entre a data inicial e final é de $diferenca_de_dia_entre_datas dias ";
    ?>
  
</body>
</html>