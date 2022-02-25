<?php
include_once "../modelo/usuarios.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/Exception.php';
require '../PHPMailer/SMTP.php';

$mail=new PHPMailer(true);

if (!empty($_POST['nox']) && !empty($_POST['usu']) && !empty($_POST['clave']) && !empty($_POST['tipo'])) {
    $nox = limpiar($_POST['nox']);
    $usu = limpiar($_POST['usu']);
    $clave = limpiar($_POST['clave']);
    $verificar = limpiar($_POST['verificar']);
    $tipo = limpiar($_POST['tipo']);
    $contra_hash = password_hash($clave, PASSWORD_DEFAULT);
    if($clave==$verificar){
        $oPersona = new Persona();
        $usuario=$oPersona->getUsuario($usu);
        if(isset($usuario)){
            echo mensajes('El Usuario No Est&aacute; Disponible','rojo','titulo');
            echo '<meta http-equiv="refresh" content="2;url=../vista/insertar.php">';
        }else{
            $oPersona->nuevoUsuario($nox, $usu, $tipo, $contra_hash);
            
            echo mensajes('Usuario Registrado Con &Eacute;xito','verde','titulo');
            echo '<meta http-equiv="refresh" content="2;url=../vista/login.php">';
        }
       
    }else{
        echo mensajes('Las Claves No Coinciden','rojo','titulo');
        echo '<meta http-equiv="refresh" content="2;url=../vista/insertar.php">';
    }
   
}
