<?php
function mensajes($mensaje, $tipo, $titulo)
{
    if ($tipo == 'verde') {
        $tipo = 'suceso';
        $icon = 'fas fa-check-circle';
    } elseif ($tipo == 'rojo') {
        $tipo = 'error';
        $icon = 'fas fa-ban';
    } elseif ($tipo == 'azul') {
        $tipo = 'informacion';
        $icon = 'fas fa-exclamation-triangle';
    }
    return '<div class="cover"><div class="msg"> 
<div class="cabecera"><center>Proyecto</center></div>
<div class="title ' . $tipo . '"><i class="' . $icon . '"></i> ' . $titulo . '</div>
<div class="mensaje">
 <strong>' . $mensaje . '</strong>
</div>
<div><img src="../images/preloader.gif" style="display:block;margin:auto;margin-top:0px; padding-top:0px"></div>
</div></div>';
}
