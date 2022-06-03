<?php include 'inc/header.php'; ?>
<?php include_once '../config/database.php' ?>
<?php include_once '../controllers/Pedidos.php' ?>
<?php
    $counterR = 0;
    $counterP = 0;
    $counterH = 0;
    $redirect = ' onclick=\"location.href=\'crear_pedido.php?pedidoId=<?= $row["id"]?> ';


if ($_SESSION["type"] === 1 || $_SESSION["type"]===2){
        $pedidos = new PedidoController();
        $dataPedidos = $pedidos->pedidosInfo();
    } elseif ($_SESSION["type"] === 3 || $_SESSION["type"]===4){
        $pedidos = new PedidoController();
        $dataPedidos = $pedidos->pedidosInfoClientes();
    }

function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }

    if (isset($_POST["id_pedido"]) && isset($_POST["estado"])){
        $id = $_POST["id_pedido"];
        $estado = $_POST["estado"];
        if ($estado === "enrevision"){
            $estado = "Revisión";
        } elseif ($estado === "enproceso"){
            $estado = "Proceso";
        } elseif ($estado === "terminado"){
            $estado = "Hecho";
        }
        if ($_SESSION["type"] === 1 || $_SESSION["type"]===2){
            $pedidos->pedidoChangeState($id, $estado);
            header('Location: '.$_SERVER['REQUEST_URI']);
        }

    }

?>

    <div class="container_seguimiento">
        <div>
            <h1>PEDIDOS</h1>
        </div>
        <div class="buttons_acciones_seguimiento">
            <form action="crear_pedido.php">
                <button <?php if ($_SESSION["type"]===3 || $_SESSION["type"]===4) echo "disabled style='display:none'"?> type="submit" id="button_crear_prospecto" class="button_crear_prospecto">
                    CREAR PEDIDO
                </button>
            </form>

        </div>
        <div id="pedidos">
            <h2>Pedidos en Revisión</h2>
            <div class="cards">
                <?php
                if($dataPedidos)
                {
                    $counterR = 0;
                    foreach($dataPedidos as $row)
                    {
                        if ($row["etapa"] !== "Revisión"){
                            continue;
                        } else {
                            $counterR+=1 ;
                        }
                        ?>
                        <div class="card" id="card-<?= $row["id"]?>">
                            <div onclick="location.href='crear_pedido.php?pedidoId=<?= $row["id"]?>';" class="card_id"><?= $row["id"]?></div>
                            <div onclick="location.href='crear_pedido.php?pedidoId=<?= $row["id"]?>';" class="card_name"><?= $row["nombre"]?></div>
                            <div onclick="location.href='crear_pedido.php?pedidoId=<?= $row["id"]?>';" class="card_tel"><?= $row["tel"]?></div>
                            <div onclick="location.href='crear_pedido.php?pedidoId=<?= $row["id"]?>';" class="card_mail"><?= $row["correo"]?></div>
                            <form method="post">
                                <input name="id_pedido" type="hidden" value="<?= $row["id"]?>"/>
                                <div class="card_fase">
                                    <select title="dropdown_state" name="estado" class="estadolist" onchange="this.form.submit()">
                                        <option value="enrevision" selected >Revisión</option>
                                        <option value="enproceso" >Proceso</option>
                                        <option value="terminado">Hecho</option>
                                    </select>
                                </div>
                            </form>
                            <div class="card_opciones" onclick="location.href='crear_pedido.php?pedidoId=<?= $row["id"]?>';">
                                <?php if ($row["cotizacion"] === 1) echo "<img  src='img/cot.png' alt='cotización'>"; ?>
                                <?php if ($row["diseño"] === 1) echo "<img src='img/dis.png' alt='diseño'>"; ?>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    echo "No se encontraron registros";
                }

                if ($counterR === 0 && ($_SESSION["type"] ===2 || $_SESSION["type"] ===1)){
                    echo "No se encontraron registros";
                    echo $counterR;
                }
                ?>






            <h2>Pedidos en Producción</h2>
                <?php
                if($dataPedidos)
                {
                    $counterP = 0;
                    foreach($dataPedidos as $row)
                    {
                        if ($row["etapa"] !== "Proceso"){
                            continue;
                        } elseif (trim($row["etapa"]) === "Proceso") {
                            $counterP = $counterP + 1 ;
                        }
                        ?>
                        <div class="card" id="card-<?= $row["id"]?>">
                            <div onclick="location.href='crear_pedido.php?pedidoId=<?= $row["id"]?>';" class="card_id"><?= $row["id"]?></div>
                            <div onclick="location.href='crear_pedido.php?pedidoId=<?= $row["id"]?>';" class="card_name"><?= $row["nombre"]?></div>
                            <div onclick="location.href='crear_pedido.php?pedidoId=<?= $row["id"]?>';" class="card_tel"><?= $row["tel"]?></div>
                            <div onclick="location.href='crear_pedido.php?pedidoId=<?= $row["id"]?>';" class="card_mail"><?= $row["correo"]?></div>
                            <form method="post">
                                <input name="id_pedido" type="hidden" value="<?= $row["id"]?>"/>
                                <div class="card_fase">
                                    <select title="dropdown_state" name="estado" class="estadolist" onchange="this.form.submit()">
                                        <option value="enrevision" >Revisión</option>
                                        <option value="enproceso" selected>Proceso</option>
                                        <option value="terminado">Hecho</option>
                                    </select>
                                </div>
                            </form>
                            <div class="card_opciones" onclick="location.href='crear_pedido.php?pedidoId=<?= $row["id"]?>';">
                                <?php if ($row["cotizacion"] === 1) echo "<img  src='img/cot.png' alt='cotización'>"; ?>
                                <?php if ($row["diseño"] === 1) echo "<img  src='img/dis.png' alt='diseño'>"; ?>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    echo "No se encontraron registros";
                }

                if ($counterP === 0 && ($_SESSION["type"] ===2 || $_SESSION["type"] ===1)){
                    echo "No se encontraron registros";

                }
                ?>




            <h2>Pedidos Terminados</h2>
            <div class="cards">
                <?php
                if($dataPedidos)
                {
                    $counterH = 0;
                    foreach($dataPedidos as $row)
                    {
                        if ($row["etapa"] !== "Hecho"){
                            continue;
                        } else {
                            $counterH+=1 ;
                        }
                        ?>
                        <div class="card" id="card-<?= $row["id"]?>">
                            <div onclick="location.href='crear_pedido.php?pedidoId=<?= $row["id"]?>';"class="card_id"><?= $row["id"]?></div>
                            <div onclick="location.href='crear_pedido.php?pedidoId=<?= $row["id"]?>';" class="card_name"><?= $row["nombre"]?></div>
                            <div onclick="location.href='crear_pedido.php?pedidoId=<?= $row["id"]?>';" class="card_tel"><?= $row["tel"]?></div>
                            <div onclick="location.href='crear_pedido.php?pedidoId=<?= $row["id"]?>';" class="card_mail"><?= $row["correo"]?></div>
                            <form method="post">
                                <input name="id_pedido" type="hidden" value="<?= $row["id"]?>"/>
                                <div class="card_fase">
                                    <select title="dropdown_state" name="estado" class="estadolist" onchange="this.form.submit()">
                                        <option value="enrevision" >Revisión</option>
                                        <option value="enproceso">Proceso</option>
                                        <option value="terminado" selected>Hecho</option>
                                    </select>
                                </div>
                            </form>

                            <div class="card_opciones" onclick="location.href='crear_pedido.php?pedidoId=<?= $row["id"]?>';">
                                <?php if ($row["cotizacion"] === 1) echo "<img  src='img/cot.png' alt='cotización'>"; ?>
                                <?php if ($row["diseño"] === 1) echo "<img  src='img/dis.png' alt='diseño'>"; ?>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    echo "No se encontraron registros";
                }

                if ($counterH === 0 && ($_SESSION["type"] ===2 || $_SESSION["type"] ===1)){
                    echo "No se encontraron registros";
                }
                ?>

            </div>
        </div>
    </div>

    <div id="Modal_Pedido" class="modal">
        <div class="modal-content" id="modalPedido">
            <span class="close" onclick="closeModal()">&times;</span>
            <form class="form_login_spaces">
                <h3>Pedido: Revisión</h3>
                <h4>ID: ${i}</h4>
                <div class="card">
                    <div class="card_info_basica">
                        <img src="img/Icons/check-mark.png" alt="icon">
                        <h5>Información Básica</h5>
                        <img src="img/Icons/dropdown1.png" class="card_drop" alt="icon">
                    </div>
                    <div class="card_info_basica_expanded"></div>
                    <div class="card_aspectos">
                        <img src="img/Icons/check-mark.png" alt="icon">
                        <h5>Aspectos Generales</h5>
                        <img src="img/Icons/dropdown1.png" class="card_drop" alt="icon">
                    </div>
                    <div class="card_aspectos_expanded"></div>
                    <div class="colores">
                        <img src="img/Icons/check-mark.png" alt="icon">
                        <h5>Colores</h5>
                        <img src="img/Icons/dropdown1.png" class="card_drop" alt="icon">
                    </div>
                    <div class="colores_expanded"></div>
                    <div class="equipos">
                        <img src="img/Icons/work-process.png" alt="icon">
                        <h5>Equipo</h5>
                        <img src="img/Icons/dropdown1.png" class="card_drop" alt="icon">
                    </div>
                    <div class="equipos_expanded"></div>
                    <div class="referencias">
                        <img src="img/Icons/delete-button.png" alt="icon">
                        <h5>Referencias</h5>
                        <img src="img/Icons/dropdown1.png" class="card_drop" alt="icon">
                    </div>
                    <div class="referencias_expanded"></div>
                </div>
            </form>
        </div>
    </div>


    <div id="Modal_Pedido_Proceso" class="modal">
        <div class="modal-content" id="modalPedidoProceso">
            <span class="close" onclick="closeModal1()">&times;</span>
            <form class="form_login_spaces">
                <h3>Pedido: Proceso</h3>
                <h4>ID:</h4>
                <div class="card">
                    <div class="sub-card-process">
                        <img src="img/Icons_Process/1.svg" alt="icon">
                        <h5>Pago Diseño</h5>
                    </div>
                    <div class="sub-card-process">
                        <img src="img/Icons_Process/2.png" alt="icon">
                        <h5>Diseño Terminado</h5>
                    </div>
                    <div class="sub-card-process">
                        <img src="img/Icons_Process/3.png" alt="icon">
                        <h5>Cotización</h5>
                    </div>
                    <div class="sub-card-process">
                        <img src="img/Icons_Process/4.svg" alt="icon">
                        <h5>Pago Cotización</h5>
                    </div>
                    <div class="sub-card-process">
                        <img src="img/Icons_Process/5.svg" alt="icon">
                        <h5>Fabricación</h5>
                    </div>
                    <div class="sub-card-process">
                        <img src="img/Icons_Process/6.svg" alt="icon">
                        <h5>Instalación</h5>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="Modal_Pedido_Proceso_Etapa" class="modal">
        <div class="modal-content" id="modalPedidoProcesoEtapa">
            <span class="close" onclick="closeModal2()">&times;</span>
            <form class="form_login_spaces">
                <h3>Pedido: Proceso</h3>
                <h4>ID: ${i}</h4>
                <div class="card">

                </div>
            </form>
        </div>
    </div>
    </div>

    <?php include 'inc/modal_profile.php'; ?>
    <script src="../src/lib/js/dropdown_crm.js"></script>
    <script src="../src/lib/js/pedidos.js"></script>



</body>

</html>