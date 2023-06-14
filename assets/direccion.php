    <!--Registro-->
    <div class="sign-up-form">
        <a href="#" class="form-cancel">
            <i class="fas fa-times"></i>
        </a>
        <strong>Registrar</strong>
        <!--inputs-->
        <form id="registroForm" autocomplete="off" action="" method="post">
            <input type="hidden" id="action2" value="register">
            <input type="text" id="name" placeholder="Nombre completo" name="fullname" required>
            <div class="error"></div>
            <input type="email" id="username2" placeholder="Ejemplo@mail.com" name="email" required>
            <div class="error"></div>
            <input type="password" id="password2" placeholder="Contraseña" required>
            <div class="error"></div>
            <input type="password" id="password22" placeholder="Confirmar contraseña" required>
            <div class="error"></div>
            <!--submit-->
            <input type="submit" onclick="submitData2();" value="Continuar">
        </form>

        <?php require '../php/script.php'; ?>

        <!--olvide contraseña-->
        <div class="form-btns">
            <a href="#" class="already-account">Ya tengo una cuenta</a>
        </div>
    </div>