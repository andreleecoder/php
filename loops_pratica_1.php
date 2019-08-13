<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>loops na pratica 1 </title>
</head>
<body>
   
    <?php
    /*$registros=['título notícia 1','título notícia 2','título notícia 3'];
        $idx=0;
        while ($idx < 3) {
            echo $registros[$idx].'<hr/>';
            
            $idx++;
        }*/
        $registros=[
            ['titulo'=>'título notícia 1','conteudo'=>'conteudo noticia 1'],
            ['titulo'=>'título notícia 2','conteudo'=>'conteudo noticia 2'],
            ['titulo'=>'título notícia 3','conteudo'=>'conteudo noticia 3'],
            ['titulo'=>'título notícia 4','conteudo'=>'conteudo noticia 4'],
            ['titulo'=>'título notícia 5','conteudo'=>'conteudo noticia 5']
            ];
            echo'<pre>';
            print_r($registros);
            echo'</pre>';
            echo '<br/> <br/> <br/>';
            //count conta a quantidade de elementos dentro de um array
            echo 'O array possui: '.count($registros). 'registros';
            //$idx=0;
            /*while ($idx < count($registros)) {
                echo'<h3>'.$registros[$idx]['titulo'].'</h3>';
                echo'<p>'.$registros[$idx]['conteudo'].'</p>';
                echo '<hr/>';
                
                $idx++;
            };

            do{
                echo'<h3>'.$registros[$idx]['titulo'].'</h3>';
                echo'<p>'.$registros[$idx]['conteudo'].'</p>';
                echo '<hr/>';
                
                $idx++;
            }while ($idx < count($registros));*/
            for($idx=0;$idx < count($registros);$idx++){
                echo'<h3>'.$registros[$idx]['titulo'].'</h3>';
                echo'<p>'.$registros[$idx]['conteudo'].'</p>';
                echo '<hr/>';
            }

  
    ?>
  
</body>
</html>