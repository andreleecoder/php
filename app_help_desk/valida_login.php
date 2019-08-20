<?php
$usuario_autenticado=false;
$usuarios_app=[
    ['email'=>'adm@teste.com.br','senha'=>'1234'],
    ['email'=>'usuario@teste.com.br','senha'=>'abcd'],
];

foreach ($usuarios_app as $user) {
    if ($user['email']==$_POST['email']&&$user['senha']==$_POST['senha']) {
        $usuario_autenticado=true;
    }
}
if ($usuario_autenticado) {
    echo 'usuário autenticado';
}else {
    header('Location:index.php?login=erro');
}




?>