<?php
include_once "../modelo/usuarios.php";
$oCliente= new Persona();
if(!empty($_POST["txbuscar"])){
    $buscar=$_POST["txbuscar"];
    $clientes=$oCliente->consultarClientes($buscar);

}else{
    $clientes=$oCliente->listaClientes();
}
foreach($clientes as $row){
    $id=$row['id'];
    $doc=$row['doc_clie'];
    $nombre=$row['nombre_clie'];
    $apellido=$row['apellido_usu'];
    $fecnac=$row['fecnac_clie'];
    $tel=$row['telefono_clie'];
    $correo=$row['correo_clie'];
    $dir=$row['dir_clie'];
    $sexo=$row['sexo_clie'];

    ?>
    <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $doc ?></td>
        <td><?php echo $nombre ?></td>
        <td><?php echo $apellido ?></td>
        <td><?php echo $fecnac ?></td>
        <td><?php echo $tel ?></td>
        <td><?php echo $correo ?></td>
        <td><?php echo $dir ?></td>
        <td><?php echo $sexo ?></td>
        <td>
            <a href="../vista/actualizar_cliente.php?" title="Actualizar Cliente"><i class="fas fa-user-edit"></a></td>
    </tr>
    <?php
}
?>