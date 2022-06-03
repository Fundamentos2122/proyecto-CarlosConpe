<?php include '../src/lib/php/register_user_secondary.php'; ?>
<?php include '../controllers/Prospectos.php'; ?>
<?php include '../controllers/Clientes.php'; ?>

    <div class="container_seguimiento">
        <div>
            <h1>CRM</h1>
        </div>
        <div class="buttons_acciones_seguimiento">
            <button id="button_crear_prospecto" class="button_crear_prospecto">CREAR PROSPECTO</button>
            <button id="button_crear_cliente" class="button_crear_cliente">CREAR CLIENTE</button>
        </div>
        <div>
            <h2>Prospectos</h2>
            <div class="cards">
                <?php
                $prospects = new ProspectController();
                $result = $prospects->index();
                if($result)
                {
                    foreach($result as $row)
                    {
                        ?>
                        <div class="card" id="card-<?= $row['id'] ?>">
                            <div class="card_icon">
                                <img src="img\Icons\profile1.svg" alt="profile" height="20px">
                            </div>
                            <div id="card_name_<?= $row['id'] ?>" class="card_name_"><?= $row['nombre'] ?></div>
                            <div id="card_drop_<?= $row['id'] ?>" class="card_drop"><img src="img/Icons/dropdown1.png" alt="drop"></div>
                            <div id="card_tel_<?= $row['id'] ?>" class="card_tel"><?= $row['telefono'] ?></div>
                            <div id="card_mail_<?= $row['id'] ?>" class="card_mail"><?= $row['correo'] ?></div>
                            <div id="card_group_<?= $row['id'] ?>" class="card_group"></div>
                            <div class="card_pedido" id="card-button-<?= $row['id'] ?>" onclick="crearPedido(<?= $row['id'] ?>)">
                                <button href="" class="card_pedido_button">CREAR PEDIDO</button>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    echo "No se encontraron registros";
                }
                ?>
            </div>
        </div>
        <div>
            <h2>Clientes</h2>
            <div class="cards">
                <?php
                $prospects = new ClientController();
                $result = $prospects->index();
                if($result)
                {
                    foreach($result as $row)
                    {
                        ?>
                        <div class="card">
                            <div class="card_icon">
                                <img src="img\Icons\profile1.svg" alt="profile" height="20px">
                            </div>
                            <div class="card_name"><?= $row['nombre'] ?></div>
                            <div class="card_drop"><img src="img/Icons/dropdown1.png" alt="drop"></div>
                            <div class="card_tel"><?= $row['telefono'] ?></div>
                            <div class="card_mail"><?= $row['correo'] ?></div>
                            <div class="card_group"></div>
                            <div class="card_pedido">
                                <button href="" class="card_pedido_button">CREAR PEDIDO</button>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    echo "No se encontraron registros";
                }
                ?>
            </div>
        </div>
    </div>


    <?php include 'inc/modal_profile.php'; ?>

    <div id="Modal_Crear_Prospecto" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form class="form_login_spaces" method="post">
                <h3>Crear Prospecto</h3>
                <input type="text" placeholder="Username del Prospecto" name="username_prospecto" required>
                <input type="text" placeholder="Nombre del Prospecto" name="nombre_prospecto" required>
                <input type="text" placeholder="Telefono" name="telefono_prospecto" required>
                <input type="text" placeholder="Correo Electrónico" name="correo_prospecto" required>
                <input type="password" name="password_prospecto" placeholder="Contraseña" required>
                <input type="password" name="confirm_password_prospecto" placeholder="Contraseña" required>
                <input type="hidden" placeholder="type" name="type_prospecto" required hidden value="3">
                <button type="submit" name="submitProspecto">Crear Prospecto</button>
            </form>
        </div>
    </div>

    <div id="Modal_Crear_Cliente" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form class="form_login_spaces" method="post">
                <h3>Crear Cliente</h3>
                <input type="text" placeholder="Username del Cliente" name="username_cliente" required>
                <input type="text" placeholder="Nombre del Cliente" name="nombre_cliente" required>
                <input type="text" placeholder="Telefono" name="telefono_cliente" required>
                <input type="text" placeholder="Correo Electrónico" name="correo_cliente" required>
                <input type="password" name="password_cliente" placeholder="Contraseña" required>
                <input type="password" name="confirm_password_cliente" placeholder="Contraseña" required>
                <input type="hidden" placeholder="type" name="type_cliente" required hidden value="4">
                <button type="submit" name="submitCliente">Crear Cliente</button>
            </form>
        </div>
    </div>

    <div id="Modal_Crear_Pedido" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form class="form_login_spaces" action="crear_pedido.php" method="GET">
                <h3>Crear Pedido</h3>
                <h4>Cliente</h4>
                <div class="flex_cliente_info">
                    <div id="cliente-info">

                    </div>
                    <div class="buttons_crear_pedido">
                        <a href="crear_pedido.php">
                            <button type="submit" name="crearPedido" option="0">Crear Pedido</button>
                        </a>
                        <button type="button" option="1">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="../src/lib/js/crm.js"></script>
    <script src="../src/lib/js/dropdown_crm.js"></script>
    <script src="../src/lib/js/cards.js"></script>



</body>

</html>