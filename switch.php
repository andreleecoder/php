<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>switch</title>
</head>
<body>

    <?php
            /*diferente do javascript os valores do parametros nao precisam ser identicos */
            $parametro='1';

        switch ($parametro) {
            case 1:echo'not here';
                 break;
            case 2:echo 'here for now';
                 break;
            default:
                echo'not her tho';
                break;
        }
   ?>

  
</body>
</html>