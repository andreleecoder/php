<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>funçoes nativas strings</title>
</head>
<body>
   
    <?php
        //string to lower
        $texto='Curso Completo de PHP';
        echo $texto."<br/>";  
        echo strtolower($texto);

        echo"<hr/>";
        //string to upper
        echo $texto."<br/>";  
        echo strtoupper($texto);

        echo"<hr/>";
        //upper case first
        echo $texto."<br/>";  
        echo ucfirst($texto);

        echo"<hr/>";
        //string replace
        echo $texto."<br/>";  
        echo str_replace('PHP','philpe',$texto);


    ?>
  
</body>
</html>