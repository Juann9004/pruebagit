<?php
 $main=false;
 session_start();
 include_once "../includes/mensajes.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/formularios.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/mensajes.css" title="Estilo alternativo" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-
G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-12 col-s-12 main">
            <div class="col-12 col-s-12">
                <?php
                include_once "../includes/menuser.php"
                ?>
            </div>
            <div class="col-10 col-s-10 contenedor">
                <h1 class="col-12 col-s-12">Registrar Producto</h1>
                
                <form action="" method="post" class="col-12 col-s-12" enctype="multipart/form-data" >
                    <div class="fila">
                        <input type="text" name="ref" id="ref" placeholder="Ingrese la referencia del producto" required autofocus="autofocus">
                        <label for="ref" class="propiedad">Referencia</label>
                    </div>
                    <div class="fila">
                        <input type="text" name="producto" id="producto" placeholder="Ingrese el nombre del producto" required>
                        <lable class="propiedad" for="producto"></lable>
                    </div>
                    <div class="fila">
                        <select name="unidad" id="unidad" required>
                            <option disabled selected>Escoja una opci&oacute;n</option>
                            <option value="lb">Libra</option>
                            <option value="kg">Kilogramo</option>
                            <option value="und">Unidad</option>
                            <option value="lt">Litro</option>
                            <option value="ml">Mililitro</option>
                        </select>
                        <label for="unidad" class="propiedad">Unidad de medida</label>
                    </div>
                    <div class="fila">
                        <input type="number" name="precio" id="precio" required placeholder="Ingrese el precio del producto">
                        <label for="precio" class="propiedad">Precio del producto</label>
                    </div>
                    <div class="fila">
                        <input type="file" name="imagen" id="imagen" placeholder="selecciona la imagen" required>
                        <input type="hidden" name="MAX_FILE_SIZE" value="9000000">
                        <label for="" class="propiedad"></label>
                    </div>
                    <div class="fila botonera">
                        <button type="submit">Registrar</button>
                        <button type="reset">cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>