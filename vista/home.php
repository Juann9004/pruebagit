<?php
session_start();
include_once "../includes/mensajes.php";
$tipo = $_SESSION['user_class'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Home</title>
    <link type="text/css" rel="stylesheet" href="../css/responsive.css">
    <link type="text/css" rel="stylesheet" href="../css/estilo.css">
    <link type="text/css" rel="stylesheet" href="../css/menu.css">
    <link type="text/css" rel="stylesheet" href="../css/mn_interno.css">
    <link type="text/css" rel="stylesheet" href="../css/mensajes.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-
G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-12 col-s-12">
            <?php
            include_once "../includes/menuser.php";
            ?>
        </div>
        <div class="col-12 col-s-12 main">
            <div class="col-10 col-s-10 contenedor">
                <div class="col-12 col-s-12">
                    <h1>P&Aacute;GINA DE INICIO</h1>
                </div>
                <div class="col-9 col-s-12 formulario">
                    <h2 class="col-12 col-s-12">
                        Cronograma de actividades
                    </h2>
                    <p class="col-12 col-s-12">
                        Mauris malesuada, sem ornare laoreet hendrerit, nisl mauris ultrices lacus, a aliquet augue purus tincidunt
                        libero. Maecenas tincidunt pretium magna. Suspendisse in efficitur mauris. In pulvinar sit amet dolor nec
                        pellentesque. Phasellus fringilla est sit amet nunc vulputate tempor. Nam venenatis enim vel ex luctus
                        feugiat. Aenean nec turpis et tortor convallis viverra vitae ac ipsum. In hac habitasse platea dictumst.
                    </p>
                </div>
                <div class="col-3 col-s-12" style="padding:1px;">
                    <?php
                    if ($tipo == "Administrador") {
                        require_once "../includes/menuadmin.php";
                    } else {
                        require_once "../includes/menuadmin.php";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>