<div style="position: absolute; height: 50px; margin-left: 0px; width: 100%;top:0px;left:0px;text-align:left;z-index:99999;background:#F1F1F1;">
    <div id='NavMenu'>
        <div id='NavMenuleft'>
            <input type="checkbox" id="bt" />
            <label for="bt"><i class="fas fa-bars"></i></label>
            <ul id='nav'>
                <li><a href='../vista/home.php'><i class="fas fa-home"></i>INICIO</a></li>
                <li><a href="#"><i class="fas fa-cog"></i>MENU1<i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">MENU1.1</a></li>
                        <li><a href="#">MENU1.2</a></li>
                        <li><a href="#">MENU1.3</a></li>
                    </ul>
                </li>
                <div id="derecha">
                    <li>
                        <span style="color: #333;font-size:12pt;font: bold 14px Arial, sans-serif;">
                            HOLA <?php echo $_SESSION['user_name']; ?><i class="fas fa-chevron-down"></i>
                        </span>
                        <ul>
                            <li><a href="../vista/cam_clave.php">Cambiar contrase&ntilde;a</a></li>
                            <li><a href="#">configuracion2</a></li>
                            <li><a href="../includes/php_cerrar.php">Salir</a></li>
                        </ul>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</div>