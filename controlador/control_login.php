<?php
include_once "../modelo/usuarios.php";
//incluimos el modelo
$oPersona= new Persona ();
if(!empty($_POST['email'])&&!empty($_POST ['password'])){
    $clave=limpiar($_POST['password']);
    $email=limpiar($_POST['email']);
    $usuario = $oPersona->getUsuario($email);

    if(isset($usuario['correo'])){
        if(password_verify($clave,$usuario['clave'])){
            $_SESSION['user_email_address']=$usuario['correo'];
            $_SESSION['user_id']=$usuario['id'];
            $_SESSION['user_class']=$usuario['tipo'];
            $_SESSION['user_name']=$usuario['nombre'];
            echo mensajes('Bienvenido '.$_SESSION['user_name'],'verde', 'Login');
            echo '';
            echo '<meta http-equiv="refresh" content="5;url=../vista/home.php">';
            

        }else{
            echo mensajes('Lo sentimos, el usuario o contrase&ntilde;a fue incorrecto','rojo', 'Error');
            echo '<meta http-equiv="refresh" content="2;url=../vista/login.php">';
        }
    }else{
        echo mensajes('Lo sentimos, el usuario o contrase&ntilde;a fue incorrecto','rojo' , 'Error');
        echo '<meta http-equiv="refresh" content="2;url=../vista/login.php">';
    }
}
        
?>