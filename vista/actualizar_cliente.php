<?php
session_start();
$tipeuser=$_SESSION['user_class'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/formularios.css">
    <link href="../css/menu.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Actualizar cliente</title>
</head>
<body>
    <div class="row">
        <div class="col-12 col-s-12 main">
            <div class="col-12 col-s-12">
                <?php
                if ($tipeuser=="administrador"){
                    include_once "../includes/menuser.php";
                }else{
                    include_once "../includes/menuser.php";
                }
                include_once "../controlador/control_buscarcliente.php";
                ?>
            </div>
            <div class="col-10 col-s-10 contenedor">
                <h1>Actualizar Cliente</h1>
                <form action="" method="post">
                    <div class="fila">
                    <input type="hidden" name="idclie" value="<?php echo $id; ?>" >
                    <input type="text" name="name" value="<?php echo $nombre; ?>" id="nox">
                        <label for="name" class="propiedad">Nombre</label>
                    </div>

                    <div class="fila">
                    <input type="text" name="doc" value="<?php echo $doc; ?>" id="doc">
                        <label for="doc" class="propiedad">Documento</label>
                    </div>

                    <div class="fila">
                    <input type="text" name="dir" value="<?php echo $dir; ?>" id="dir">
                        <label for="dir" class="propiedad">Direcci&oacute;n</label>
                    </div>

                    <div class="fila">
                    <input type="tel" name="phone" value="<?php echo $tel; ?>" id="phone">
                        <label for="phone" class="propiedad">Tel&eacute;fono</label>
                    </div>

                    <div class="fila">
                    <input type="date" name="fecnac" value="<?php echo $fecnac; ?>" id="fecnac">
                        <label for="fecnac" class="propiedad">Fecha de nacimiento</label>
                    </div>

                    <div class="fila">
                    <input type="datetime" name="fecreg" value="<?php echo $fecreg; ?>" id="fecreg" readonly>
                        <label for="fecreg" class="propiedad">Fecha de registro</label>
                    </div>
                    <button type="submit">
                    <i class="fas fa-user-edit"></i> Actualizar
                    </button>
                </form>
                <?php
                    include_once "../controlador/control_updatecliente.php";
                ?>
            </div>
        </div>
    </div>
</body>
</html>