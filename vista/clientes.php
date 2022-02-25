<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/tablas.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-
G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <title>Clientes</title>
</head>
<body>
    <div class="row">
        <div class="col-12 col-s-12 main">
            <div class="col-12 col-s-12">
                <?php
                include_once "../includes/menuser.php";
                ?>
            </div>
            <div class="col-12 col-s-12">
                <form action="" method="post">
                    <input type="text" name="txbuscar" placeholder="Ingrese el nombre" autofocus="autofocus">
                    <button>Buscar</button>
                </form>
            </div>
            <table class="col-12 col-s-12">
                <tr>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Direcci&oacute;n</th>
                    <th>Tel&eacute;fono</th>
                    <th>opciones</th>
                </tr>
                <?php
                include_once "../controlador/control_consul_clientes.php";
                ?>
            </table>
        </div>
    </div>
</body>
</html>