<?php

    function delete_session(){

        session_start();
        $session_type = $_SESSION["type"];
        session_unset();
        session_destroy();
        if ($session_type === 1 || $session_type === 2 ){
            header("Location: ../login_vendedor.php");
        } else {
            header("Location: ../");
        }


    }

    if(isset($_POST['submit'])){
        delete_session();
    }


?>


    <form action="inc/modal_profile.php" method="POST">
        <div id="Modal_Profile" class="modal">
            <div class="modal-content-profile" id="modalProfile">
                <h3>Perfil</h3>
                <h4>Tipo de Usuario:
                    <span>
                        <?php if ($_SESSION["type"] === 1):?>
                            Administrador
                        <?php elseif ($_SESSION["type"] === 2): ?>
                            Vendedor
                        <?php else:?>
                            Cliente
                        <?php endif;?>

                    </span></h4>
                <h4>Nombre: <span><?php echo $_SESSION["username"]?> </span></h4>
                <button type="submit" name="submit" class="cerrar_sesión">CERRAR SESIÓN</button>
            </div>
        </div>
    </form>


    <script src="../src/lib/js/nav.js"></script>
