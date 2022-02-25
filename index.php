<?php 
$main = true;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Index</title>
    <link href="css/efectos.css" title="Estilo alternativo" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/responsive.css">
    <link type="text/css" rel="stylesheet" href="css/menu.css">
    <link type="text/css" rel="stylesheet" href="mensajes.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-
G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <style>
        .der {
            background-color: #fff;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-12 col-s-12">
            <?php
            include_once "includes/menuext.php";
            ?>
        </div>
        <div class="col-12 col-s-12">
            <h1>P&Aacute;GINA PRINCIPAL</h1>
        </div>
        <div class="col-3 col-s-12 der">
            <img src="image/logo.png" class="col-12 col-s-12">
        </div>
        <div class="col-9 col-s-12 acordeon">
            <a href="#seccion1">&iquest;Quienes Somos&#63;</a>
            <p id="seccion1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, libero eget cursus
                varius, enim dui condimentum magna, vitae dignissim ligula sapien vel lectus. Nam ullamcorper
                tincidunt venenatis. Mauris et lorem enim. Nullam sit amet leo est. Praesent non leo dignissim,
                consectetur urna at, iaculis magna. Donec mi velit, dictum sit amet tortor sed, euismod dignissim sem.
                Curabitur velit libero, lobortis quis quam at, pulvinar blandit justo. Phasellus eu felis ultricies magna
                tempor imperdiet egestas eu turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                Nunc ipsum diam, porttitor in arcu nec, fermentum gravida massa.
            </p>
            <a href="#seccion2">Misi&oacute;n</a>
            <p id="seccion2">
                Mauris malesuada, sem ornare laoreet hendrerit, nisl mauris ultrices lacus, a aliquet augue purus
                tincidunt libero. Maecenas tincidunt pretium magna. Suspendisse in efficitur mauris. In pulvinar sit
                amet dolor nec pellentesque. Phasellus fringilla est sit amet nunc vulputate tempor. Nam venenatis
                enim vel ex luctus feugiat. Aenean nec turpis et tortor convallis viverra vitae ac ipsum. In hac habitasse
                platea dictumst. Sed auctor faucibus velit quis euismod.
            </p>
            <a href="#seccion3">Visi&oacute;n</a>
            <p id="seccion3">
                Cras et nunc at urna mollis pretium sed sit amet sem. Quisque placerat urna quis dui dignissim
                elementum vel quis lacus. Etiam vehicula facilisis metus, eu consectetur orci sodales non. Etiam viverra
                magna ac neque rutrum, non luctus tortor scelerisque. Vestibulum rhoncus nibh eget augueinterdum
                accumsan. Praesent a pellentesque augue. Sed finibus enim enim, non tincidunt enim luctus ut. Nulla
                sed nunc ac mi tempus porttitor ac ac dui. Vivamus accumsan neque vitae turpis lobortis, non
                dapibus orci ultricies. Nam tempor id ligula eget tempus.
            </p>
            <a href="#seccion4">Servicios</a>
            <p id="seccion4">
                Cras et nunc at urna mollis pretium sed sit amet sem. Quisque placerat urna quis dui dignissim
                elementum vel quis lacus. Etiam vehicula facilisis metus, eu consectetur orci sodales non. Etiam viverra
                magna ac neque rutrum, non luctus tortor scelerisque. Vestibulum rhoncus nibh eget augueinterdum
                accumsan. Praesent a pellentesque augue. Sed finibus enim enim, non tincidunt enim luctus ut. Nulla
                sed nunc ac mi tempus porttitor ac ac dui. Vivamus accumsan neque vitae turpis lobortis, non
                dapibus orci ultricies. Nam tempor id ligula eget tempus. Nulla bibendum non eros ut ultrices. Aenean
                consectetur, lacus sed facilisis efficitur, nisl sem luctus arcu, et pellentesque libero purus vel tellus.
            </p>
        </div>
    </div>
</body>

</html>