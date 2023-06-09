<?php
require '../php/function.php';
?>

<div class="navigation">
    <a href="index.php" class="logo">
        <img src="images/logo.png" alt="Paulistas - Tienda en línea">
    </a>
<!--menu-->
<ul class="menu-general">
    <ul class="menu">
        <li>   
            <!--buscar-->
            <div class="search-bar">
                <div class="search-input">
                    <input type="text" placeholder="Buscar producto"/>
                    <a href="#"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </li>
    </ul>

</ul>
<!--right menu-->
<div class="right-menu">
    <!--usuario-->
    <a href="#" class="user"><i class="fas fa-user"></i>
    </a>
    <!--carrito-->
    <a href="#">
        <i class="fas fa-shopping-cart">
        <span class="num-cart-product">0</span>
        </i>
    </a>
</div>
</div>

<div class="navigation2">
    <div></div>
    <ul class="menu2">
        <li><a href="cintas.html">Cintas</a></li>
        <li><a href="dispensadores.html">Dispensadores</a></li>
        <li><a href="cacahuate.html">Cacahuate</a></li>
        <li><a href="cajas.html">Cajas</a></li>
    </ul>
    <div></div>
</div>

<!--Login y registro-->
<div class="form">
    <!--login-->
    <div class="login-form">
        <a href="#" class="form-cancel">
            <i class="fas fa-times"></i>
        </a>
        <strong>Iniciar sesión</strong>
        <!--inputs-->
        <form autocomplete="off" action="" method="post">
            <input type="hidden" id="action" value="login">
            <input type="email" id="username" placeholder="Ejemplo@mail.com" required>
            <input type="password" id="password" placeholder="Contraseña" required>
            <!--submit-->
            <input type="submit" onclick="submitData();" value="Entrar">
        </form>

        <?php require '../php/script.php'; ?>
        <!--olvide contraseña-->
        <div class="form-btns">
            <a href="#" class="forget">Olvidé mi contraseña</a>
            <a href="#" class="sign-up-btn">Crear cuenta</a>
        </div>
    </div>

    <!--Registro-->
    <div class="sign-up-form">
        <a href="#" class="form-cancel">
            <i class="fas fa-times"></i>
        </a>
        <strong>Registrar</strong>
        <!--inputs-->
        <form autocomplete="off" action="" method="post">
            <input type="hidden" id="action2" value="register">
            <input type="text" id="name" placeholder="Nombre completo" name="fullname">
            <input type="email" id="username2" placeholder="Ejemplo@mail.com" name="email" required>
            <input type="password" id="password2" placeholder="Contraseña" required>
            <!--submit-->
            <input type="submit" onclick="submitData2();" value="Continuar">
        </form>

        <?php require '../php/script.php'; ?>

        <!--olvide contraseña-->
        <div class="form-btns">
            <a href="#" class="already-account">Ya tengo una cuenta</a>
        </div>
    </div>
</div>

<!--jQuery-->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script><script type="text/javascript">

    /*Activar inicio sesion*/
    $(document).on('click','.user, .already-account', function(){
        $('.form').addClass('login-active').removeClass('sign-up-active')
    });

    /*Activar registro*/
    $(document).on('click','.sign-up-btn', function(){
        $('.form').addClass('sign-up-active').removeClass('login-active')
    });

    /*Cerrar inicio y registro*/
    $(document).on('click','.form-cancel', function(){
        $('.form').removeClass('login-active').removeClass('sign-up-active')
    });


</script>