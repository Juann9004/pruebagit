<?php

session_start();
$main=false;
include_once "../includes/mensajes.php";

?>
<!Doctype HTML>
<html lang="es">

<head>

    <meta charset="utf-8">
    <title>Registro de Usuarios</title>
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/formularios.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/mensajes.css" title="Estilo alternativo" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-
G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

</head>

<body>

    <div class="row">
        <div class="col-12 col-s-12 main">
            <div class="col-12 col-s-12">
                <?php
                include_once "../includes/menuext.php";
                ?>
            </div>
            <div class="col-10 col-s-10 contenedor">
                <h1 class="col-12 col-s-12">Registro de usuario</h1>
                <form action="" method="post" class="col-12 col-12">
                    <div class="fila">
                        <input type="text" name="nox" placeholder="Ingresa tu nombre" id="nox">
                        <label for="nox" class="propiedad">Nombre</label>
                    </div>
                    <div class="fila">
                        <input type="email" name="usu" id="usu" placeholder="Ingresa tu correo">
                        <label for="usu" class="propiedad">Correo</label>
                    </div>
                    <div class="fila">
                        <input type="password" name="clave" id="clave" placeholder="Digita tu contraseña">
                        <label for="Clave" class="propiedad">Clave</label>
                    </div>
                    <div class="fila">
                        <input type="password" name="verificar" id="Verificar" placeholder="Verificar contraseña">
                        <label for="Clave" class="propiedad">Verificar clave</label>
                    </div>
                    <div class="fila">
                        <select name="tipo" id="tipo" class="">
                            <option selected disabled>Seleccione el tipo de fuente</option>
                            <option value="administrador">Administrador</option>
                            <option value="empleado">Empleado</option>
                        </select>
                    </div>
                    <div class="fila botonera">
                        <button type="submit">Registrar</button>
                        <button type="reset">cancelar</button>
                    </div>

                </form>
            </div>
        </div>
       

        <?php

        include_once "../controlador/control_insertar.php";

        ?>

    </div>

</body>

</html>