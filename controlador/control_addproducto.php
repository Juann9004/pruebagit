<?php
    include_once "../modelo/productos.php";
    $oProducto = new Producto();
    if(!empty($_POST['ref'] && !empty($_POST['producto']))){
        $referencia = $_POST['ref'];
        $nombre = $_POST['producto'];
        $uni = $_POST['unidad'];
        $precio = $_POST['precio'];
        $target_patch="../image/productos/";
        $ruta="image/productos/";
        $target_patch=$target_patch.basename($_FILES['imagen']['name']);
        $ruta=$ruta.basename($_FILES['imagen']['name']);
        $productos=$oProducto->consultarProducto($referencia);

        if(!isset($productos)){
            if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_patch)){
                $oProducto -> nuevoProducto($referencia, $nombre, $uni, $precio, $ruta);
                echo mensajes ('El producto se registr&oacute; con &eacute;xito','verde','Exito');
                echo '<meta http-equiv="refresh" content="2;url=../vista/addproducto.php">';
            }else{
                echo mensajes ('Ha ocurrido un error intente nuevamente','rojo','Error');
                echo '<meta http-equiv="refresh" content="2;url=../vista/addproducto.php">';
            }
        }else{
            echo mensajes ('El producto ya ha sido registrado','rojo','Error');
            echo '<meta http-equiv="refresh" content="2;url=../vista/addproducto.php">';
        }
    }



?>