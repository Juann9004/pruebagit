<?php
    include_once "../includes/php_conexion.php";
        class Persona{
        var $contrasena;
        var $nombre;
        var $usuario;
        var $tipo;
        public function __construct(){
}
        public function nuevoUsuario($nombre, $usuario,$tipo,$contrasena){
        global $conexion;
        mysqli_query($conexion," INSERT INTO usuarios(nombre,usuario,clave,tipo) values ('$nombre','$usuario', '$contrasena', '$tipo')");
}
public function actualizarCliente($id, $nombre,$dir, $doc, $tel, $fecnac){
    global $conexion;
    mysqli_query($conexion,"UPDATE clientes set nombre='$nombre', documento='$doc', direccion='$dir', fecnac='$fecnac', telefono='$tel' WHERE id='$id'");
}
    public function actualizar_clave($usuario, $contrasena){
        global $conexion;
        mysqli_query($conexion, "UPDATE");
    }

    public function getUsuario ($usuario){
        global $conexion;
        $pa=mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
        
        if($row=mysqli_fetch_array($pa)){
            return[
                'id'=>$row['id'],
                'correo'=>$row['usuario'],
                'clave'=>$row['clave'],
                'tipo'=>$row['tipo'],
                'nombre'=>$row['nombre'],
               
            ];
        }
        

    }
    public function listaClientes (){
        global $conexion;
        $pa=mysqli_query($conexion, "select * from clientes");
        $datos=[];
        while($res=mysqli_fetch_array($pa)){
            $cliente=[
                'id'=>$res['id'],
                'doc'=>$res['doc_clie'],
                'nombre'=>$res['nombre_clie'],
                'apellido'=>$res['apellido_usu'],
                'fecnac'=>$res['fecnac_clie'],
                'tel'=>$res['telefono_clie'],
                'correo'=>$res['correo_clie'],
                'dir'=>$res['dir_clie'],
                'sexo'=>$res['sexo_clie'],
            ];
            array_push($datos, $cliente);
        }
        return $datos;
    }

    public function consultarClientes($nombre){
        global $conexion;
        $pa=mysqli_query($conexion, "SELECT * FROM clientes WHERE nombre_clie like '%$nombre%'");
        $datos=[];
        while($res=mysqli_fetch_array($pa)){
            $cliente=[
                'id'=>$res['id'],
                'doc'=>$res['doc_clie'],
                'nombre'=>$res['nombre_clie'],
                'apellido'=>$res['apellido_usu'],
                'fecnac'=>$res['fecnac_clie'],
                'tel'=>$res['telefono_clie'],
                'correo'=>$res['correo_clie'],
                'dir'=>$res['dir_clie'],
                'sexo'=>$res['sexo_clie'],
            ];
            array_push($datos, $cliente);
        }
        return $datos;
        

    }
    public function buscarCliente($idcliente){
        global $conexion;
        $pa=mysqli_query($conexion, "SELECT * FROM clientes WHERE id_clie = '$idcliente'");
        if($res=mysqli_fetch_array($pa)){
            return [
                'id'=>$res['id'],
                'doc'=>$res['doc_clie'],
                'nombre'=>$res['nombre_clie'],
                'apellido'=>$res['apellido_usu'],
                'fecnac'=>$res['fecnac_clie'],
                'tel'=>$res['telefono_clie'],
                'correo'=>$res['correo_clie'],
                'dir'=>$res['dir_clie'],
                'sexo'=>$res['sexo_clie'],
            ];
            
        }
        

    }
}
?>