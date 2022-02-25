<?php
include_once "../modelo/usuarios.php";
$oCliente= new Persona();
if(!empty($_GET["id"])){
    $idcliente=$_GET["id"];
    

}else{
    $idcliente=$_SESSION['user_id'];
}
$clientes=$oCliente->buscarCliente($idcliente);
if(isset($clientes)){
    $id=$clientes['id'];
    $nombre=$clientes['nombre'];
    $doc=$clientes['doc'];
    $dir=$clientes['dir'];
    $tel=$clientes['tel'];
    $fecnac=$clientes['fecnac'];
    $fecreg=$clientes['fecreg'];
}
?>