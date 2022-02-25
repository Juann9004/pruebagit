<?php
include_once "../modelo/usuarios.php";
$oCliente= new Persona();
if(!empty($_POST["idclie"])){
    $idclie=$_POST["idclie"];
    $nameclie=$_POST["name"];
    $dirclie=$_POST["dir"];
    $doclie=$_POST["doc"];
    $phoneclie=$_POST["phone"];
    $fecnaclie=$_POST["fecnac"];
    
    $oCliente->actualizarCliente($idclie, $nameclie, $dirclie, $doclie, $phoneclie, $fecnaclie);

    echo '<script type="text/javascript">Swal.fire(
        "Felicidades",
        "El registro ha sido actualizado con \u00e9xito",
        "success"
      )</script>';

}

?>