<div
    style="position: absolute; height: 50px; margin-left: 0px; width: 100%;top:0px;left:0px;text-align:left;z-index:99999;background:#F1F1F1;">
    <div id='NavMenu'>
        <div id='NavMenuleft'>
            <input type="checkbox" id="bt" />
            <label for="bt"><i class="fas fa-bars"></i></label>
            <ul id='nav'>
                <?php
                if($main==true){
                ?>
                    <li><a href='index.php'><i class="fas fa-home"></i>INICIO</a></li>
                    <li><a href='vista/contacto.php'><i class="fas fa-location-arrow"></i>CONTACTO</a></li>
                    <li><a href='vista/insertar.php'><i class="fas fa-user-plus"></i>REGISTRATE</a></li>
                    <li><a href='vista/login.php'><i class="fas fa-user-lock"></i>LOGIN</a></li>
                <?php
                }else{
                ?>
                     <li><a href='../index.php'><i class="fas fa-home"></i>INICIO</a></li>
                     <li><a href='../vista/contacto.php'><i class="fas fa-location-arrow"></i>CONTACTO</a></li>
                    <li><a href='../vista/insertar.php'><i class="fas fa-user-plus"></i>REGISTRATE</a></li>
                    <li><a href='../vista/login.php'><i class="fas fa-user-lock"></i>LOGIN</a></li>
                <?php
                }
                ?>    
            </ul>
            <div class='iconos'>
                <a href='#'><i class="fab fa-twitter"></i></a>
                <a href='#'><i class="fab fa-facebook"></i></a>
                <a href='#'><i class="fab fa-instagram"></i></a>
                <a href='#'><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </div>
</div>