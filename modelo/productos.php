<?php
include_once "../includes/php_conexion.php";
class Producto{
    var $idproducto;
    var $referencia;
    var $nombre;
    var $unidad;
    var $precio;
    var $imagen;
function __construct(){}
function nuevoProducto($referencia, $nombre, $unidad, $precio, $imagen){
    global $conexion;
    mysqli_query($conexion, "INSERT INTO productos (referencia, nombre, unidad, precio, imagen) VALUES ('$referencia', '$nombre', '$unidad', '$precio', '$imagen')");
}
function consultarProducto($referencia){
    global $conexion;
    $pa=mysqli_query($conexion, "SELECT * FROM productos WHERE referencia='$referencia'");
    if($row=mysqli_fetch_array($pa)){
            return[
                'id'         => $row['id'],
                'referencia' => $row['id'],
                'nombre'     => $row['nombre'],
                'unidad'     => $row['unidad'],
                'precio'     => $row['precio'],
                'imagen'     => $row['imagen'],
            ];
        }
    }
}
