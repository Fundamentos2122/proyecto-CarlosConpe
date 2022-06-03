<?php include 'inc/header.php'; ?>
<?php include '../controllers/Prospectos.php'; ?>
<?php include '../controllers/Clientes.php'; ?>
<?php include '../controllers/Pedidos.php'; ?>

<?php include_once '../config/database.php'?>

<?php

    $session_type = $_SESSION["type"];
    if ($session_type === 3 || $session_type ===4){
        $input_deactivate = "disabled";
        $save_changes = "style='display: none;'";
        $save_database = false;
    } else {
        $save_database = true;
        $input_deactivate = "";
        $save_changes = "";
    }

    $pedidos = new PedidoController();
    $selected = "";

    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }

    if (isset($_GET["name"])){
        $name = $_GET["name"];
    } else {
        $name = '';
    }

    if (isset($_GET["pedidoId"])){
        $pedidoId = $_GET["pedidoId"];
        $data = $pedidos->consult($pedidoId);
        console_log($data);
    } elseif (isset($_POST["pedidoId"])){
        $pedidoId = $_POST["pedidoId"];
        $data = $pedidos->consult($pedidoId);
        console_log($data);
    } else {
        global $mysqli;
        if ($result = $mysqli->query("SELECT max(id) FROM pedidos")) {
            $pedidoId = $result->fetch_row()[0]  + 1;
            $data = $pedidos->consult($pedidoId);
            $result->close();
        }
    }


if (isset($_POST["submitInfoBasica"])){
    $diseño = 0;
    $pedido = 0;

    //NOMBRE
    if (isset($_POST["nombre"]) && $_POST["nombre"] > 0){
        $id = $_POST["nombre"];
    } else {
        $id = '';
    }

    if (isset($_POST["diseño"])){
        $diseño = 1;
    } else {
        $diseño = 0;
    }

    if (isset($_POST["pedido"])){
        $pedido = 1;
    } else {
        $pedido = 0;
    }

    console_log($pedidoId);
    console_log($id);
    console_log($diseño);
    console_log($pedido);
    if ($save_database){
        if (isset($_POST["nombre"]) && $_POST["nombre"] > 0 && $pedidoId){
            $pedidos->createPedido($pedidoId, $id, $diseño, $pedido);
            header('Location: '.$_SERVER['PHP_SELF']."?pedidoId=$pedidoId"."#informacion_basica");

        }
    }
}

if (isset($_POST["submitAspectosGenerales"])){
    // material, jaladera, herraje, plano
    if (isset($_POST["material"]) && isset($_POST["material"])>0){
        $material = $_POST["material"];
    } else {
        $material = "";
    }

    if (isset($_POST["jaladera"]) && isset($_POST["jaladera"])>0){
        $jaladera = $_POST["jaladera"];
    } else {
        $jaladera = "";
    }

    if (isset($_POST["herraje"]) && isset($_POST["herraje"])>0){
        $herraje = $_POST["herraje"];
    } else {
        $herraje = "";
    }

    if (isset($_POST["plano"]) || isset($_FILES['plano'])){
        $plano = $_FILES['plano'];
    } else {
        $plano = "";
    }

    console_log($material);
    console_log($jaladera);
    console_log($herraje);
    console_log($plano);
if ($save_database) {
    if ($pedidoId && isset($_POST["material"]) && isset($_POST["material"]) > 0 && isset($_POST["jaladera"]) && isset($_POST["jaladera"]) > 0 && isset($_POST["herraje"]) && isset($_POST["herraje"]) > 0 && isset($_FILES['plano'])) {
        $pedidos->updatePedido($pedidoId, $material, $jaladera, $herraje, $plano);
        header('Location: ' . $_SERVER['REQUEST_URI'] . "#aspectos_generales");

    }
}

}

if (isset($_POST["submitColor"])){
    if (isset($_POST["color"]) ){
        $color = $_POST["color"];
    } else {
        $color = '';
    }
    console_log($color);
if ($save_database) {
    if (isset($_POST["color"])) {
        $pedidos->updatePedidoColor($pedidoId, $color);
        header('Location: ' . $_SERVER['REQUEST_URI'] . "#colores");
    }
}
}

if (isset($_POST["submitEquipo"])){

    if (isset($_POST["campana"]) && isset($_POST["campana"])>0){
        $campana = $_POST["campana"];
    } else {
        $campana = "";
    }

    if (isset($_POST["enfriador_vino"]) && isset($_POST["enfriador_vino"])>0){
        $enfriador_vino = $_POST["enfriador_vino"];
    } else {
        $enfriador_vino = "";
    }

    if (isset($_POST["estufa"]) && isset($_POST["estufa"])>0){
        $estufa = $_POST["estufa"];
    } else {
        $estufa = "";
    }

    if (isset($_POST["frigobar"]) && isset($_POST["frigobar"])>0){
        $frigobar = $_POST["frigobar"];
    } else {
        $frigobar = "";
    }

    if (isset($_POST["kit"]) && isset($_POST["kit"])>0){
        $kit = $_POST["kit"];
    } else {
        $kit = "";
    }

    if (isset($_POST["horno"]) && isset($_POST["horno"])>0){
        $horno = $_POST["horno"];
    } else {
        $horno = "";
    }

    if (isset($_POST["lavavajillas"]) && isset($_POST["lavavajillas"])>0){
        $lavavajillas = $_POST["lavavajillas"];
    } else {
        $lavavajillas = "";
    }

    if (isset($_POST["microondas"]) && isset($_POST["microondas"])>0){
        $microondas = $_POST["microondas"];
    } else {
        $microondas = "";
    }

    if (isset($_POST["monomando"]) && isset($_POST["monomando"])>0){
        $monomando = $_POST["monomando"];
    } else {
        $monomando = "";
    }

    if (isset($_POST["parrilla"]) && isset($_POST["parrilla"])>0){
        $parrilla = $_POST["parrilla"];
    } else {
        $parrilla = "";
    }

    if (isset($_POST["refrigerador"]) && isset($_POST["refrigerador"])>0){
        $refrigerador = $_POST["refrigerador"];
    } else {
        $refrigerador = "";
    }

    if (isset($_POST["tarja"]) && isset($_POST["tarja"])>0){
        $tarja = $_POST["tarja"];
    } else {
        $tarja = "";
    }

    if (isset($_POST["triturador"]) && isset($_POST["triturador"])>0){
        $triturador = $_POST["triturador"];
    } else {
        $triturador = "";
    }

    console_log($campana);
    console_log($enfriador_vino);
    console_log($estufa);
    console_log($frigobar);
    console_log($horno);
    console_log($kit);
    console_log($lavavajillas);
    console_log($microondas);
    console_log($monomando);
    console_log($parrilla);
    console_log($refrigerador);
    console_log($tarja);
    console_log($triturador);

if ($save_database) {
    $pedidos->updatePedidoEquipo($pedidoId, $campana, $enfriador_vino, $estufa, $frigobar, $horno, $kit, $lavavajillas,
        $microondas, $monomando, $parrilla, $refrigerador, $tarja, $triturador);
    header('Location: ' . $_SERVER['REQUEST_URI'] . "#equipo");
}



}

if (isset($_POST["submitImg"])){
if ($save_database) {
    if (isset($_FILES["image"])) {
        $imageRef = $_FILES["image"];
        $pedidos->updatePedidoImage($pedidoId, $imageRef);
        header('Location: ' . $_SERVER['REQUEST_URI'] . "#imagenes_referencia");
    } else {
        $imageRef = "";
    }
}

}

?>

    <div class="container_seguimiento ">
        <div class="container_crear_pedido">
            <div>
                <h1>CREAR PEDIDO</h1>
                <h3>Pedido: <?= $pedidoId?></h3>
            </div>


            <div id="informacion_basica">
                <div class="title">Información Básica</div>
                <div class="contenido_form">
                    <form method="post">
                        <input type="hidden" <?= $input_deactivate?> name="pedidoId" value="<?= $pedidoId?>" />
                        <label for="Cliente">Cliente</label>
                        <?php
                        if ($_SESSION["type"] === 3 || $_SESSION["type"] === 4 ){
                            $name = $_SESSION['nombre'];
                            echo "<input disabled type='text' value='$name' style='font-size: 17px'/>";
                        }
                        ?>
                        <select <?= $input_deactivate?>  <?php if ($_SESSION["type"] === 3 || $_SESSION["type"] === 4 ) echo "style='display:none'" ?> name="nombre" id="nombre">
                            <option value="0" ></option>
                            <?php
                            $clients = new ClientController();
                            $result = $clients->index();

                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    if (count($data) > 0){
                                        if ($data[0]['id_cliente'] == $row["id"]){
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                    } else{
                                        if ($name == $row["nombre"]){
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                    }

                                    ?>
                                    <option <?= $input_deactivate?> value="<?= $row["id"]?>" <?= $selected?> ><?= $row["nombre"]?></option>

                                    <?php
                                }
                            }
                            ?>

                            <?php
                            $prospects = new ProspectController();
                            $result = $prospects->index();
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    if (count($data) > 0){
                                        if ($data[0]['id_cliente'] == $row["id"]){
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                    } else{
                                        if ($name == $row["nombre"]){
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                    }

                                    ?>
                                    <option <?= $input_deactivate?> value="<?= $row["id"]?>" <?= $selected?> ><?= $row["nombre"]?></option>
                                    <?php
                                }
                            }
                            ?>


                        </select>
                        <br>
                        <br>
                        <label for="tipo_pedido" class="checklist-pedido">Tipo de Pedido:
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input <?= $input_deactivate?> name="diseño" placeholder="diseno" type="checkbox" value="Diseño" id="selectDiseno" <?php if (count($data) > 0) if ($data[0]['tipo_diseño'] == 1) echo "checked";?> >
                        <label for="selectDiseno">Diseño</label>
                        <input <?= $input_deactivate?> name="pedido" placeholder="cotizacion" type="checkbox" value="Cotización" id="selectCotizacion" <?php if (count($data) > 0) if ($data[0]['tipo_cotizacion'] == 1) echo "checked";?>>
                        <label for="selectCotizacion">Cotización</label>

                        <button type="submit" name="submitInfoBasica" <?php if ($_SESSION["type"] === 3 || $_SESSION["type"] === 4 ) echo "style='display:none'" ?> >Crear y/o Guardar</button>
                    </form>
                </div>
            </div>
            <div id="aspectos_generales">
                <div class="title">Aspectos Generales</div>
                <div class="contenido_form">
                    <form method="post" enctype="multipart/form-data">
                        <input <?= $input_deactivate?> type="hidden" name="pedidoId" value="<?= $pedidoId?>" />
                        <div class="card">
                            <label for="plano" class="label-file">
                                <img src="img/Icons_Process/subir.svg" alt="x">
                                <div class="subtitle">Adjuntar plano (PDF, PNG, JPG, DWG)</div>
                            </label>
                            <input <?= $input_deactivate?> type="file" name="plano" id="plano" >
                        </div>
                        <div class="flex-aspectos">
                            <div>
                                <div class="subtitle">Tipo de Herraje</div>
                                <select title="Herraje" name="herraje" id="herraje" <?= $input_deactivate?>>
                                    <option value="0"></option>
                                    <?php
                                    $result = $pedidos->get("herrajes");
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <option <?= $input_deactivate?> value="<?= $row['id'] ?>"   <?php if (count($data) > 0) if ($data[0]['herraje'] == $row['nombre']) echo "selected";?>  ><?= $row['nombre']?></option>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No se encontraron registros";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <div class="subtitle">Estilo de Jaladera</div>
                                <select <?= $input_deactivate?> title="Jaladera" name="jaladera" id="jaladera">
                                    <option value="0"></option>
                                    <?php
                                    $result = $pedidos->get("jaladeras");
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <option <?php if (count($data) > 0) if ($data[0]['jaladera'] == $row['nombre']) echo "selected";?>  value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <div class="subtitle">Material &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                <select <?= $input_deactivate?> title="Material" name="material" id="material">
                                    <option value="0"></option>
                                    <?php
                                    $result = $pedidos->get("materiales");
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <option <?php if (count($data) > 0) if ($data[0]['material'] == $row['nombre']) echo "selected";?>   value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <button type="submit" name="submitAspectosGenerales" <?php if ($_SESSION["type"] === 3 || $_SESSION["type"] === 4 ) echo "style='display:none'" ?>>Guardar</button>

                    </form>
                </div>
            </div>
            <div id="colores">
                <div class="title">Colores</div>
                <div class="contenido_form">
                    <form method="post">
                        <input <?= $input_deactivate?> type="hidden" name="pedidoId" value="<?= $pedidoId?>" />

                        <div class="card">
                            <?php
                            $result = $pedidos->get("colores");
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    ?>
                                    <label for="color">
                                        <div class="circle" style="background-color: <?= $row["hex"]?>">
                                            <input <?php if (count($data) > 0) if ($data[0]['color'] == $row['nombre']) echo "checked";?> type="radio" <?= $input_deactivate?> name="color" value="<?= $row["id"]?>">
                                        </div>
                                        <p><?= $row["nombre"]?></p>
                                    </label>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <button type="submit" name="submitColor" <?php if ($_SESSION["type"] === 3 || $_SESSION["type"] === 4 ) echo "style='display:none'" ?>>Guardar</button>
                    </form>
                </div>
            </div>
            <div id="equipo">
                <form method="post">
                    <input <?= $input_deactivate?> type="hidden" name="pedidoId" value="<?= $pedidoId?>" />

                    <div class="title">Equipo</div>
                <div class="contenido_form">
                    <div class="zona_caliente">
                        <div class="subtitle">Zona Caliente</div>
                        <label for="parrilla">Parrilla</label>
                        <select <?= $input_deactivate?> name="parrilla" id="parrilla">
                            <option value="0"></option>

                            <?php
                            $result = $pedidos->get("parrillas");
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    ?>
                                    <option <?php if (count($data) > 0) if ($data[0]['parrilla'] == $row['nombre']) echo "selected";?>    value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                    <?php
                                }
                            }
                            ?>                        </select>
                        <label for="horno">Horno</label>
                        <select <?= $input_deactivate?> name="horno" id="horno">
                            <option value="0"></option>

                            <?php
                            $result = $pedidos->get("hornos");
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    ?>
                                    <option <?php if (count($data) > 0) if ($data[0]['horno'] == $row['nombre']) echo "selected";?>    value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <label for="estufa">Estufa</label>
                        <select <?= $input_deactivate?> name="estufa" id="estufa">
                            <option value="0"></option>

                            <?php
                            $result = $pedidos->get("estufas");
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    ?>
                                    <option <?php if (count($data) > 0) if ($data[0]['estufa'] == $row['nombre']) echo "selected";?>    value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <label for="microondas">Microondas</label>
                        <select <?= $input_deactivate?> name="microondas" id="microondas">
                            <option value="0"></option>

                            <?php
                            $result = $pedidos->get("microondas");
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    ?>
                                    <option <?php if (count($data) > 0) if ($data[0]['microondas'] == $row['nombre']) echo "selected";?>     value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <label for="campana">Campana Dec</label>
                        <select <?= $input_deactivate?> name="campana" id="campana">
                            <option value="0"></option>

                            <?php
                            $result = $pedidos->get("campanas");
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    ?>
                                    <option <?php if (count($data) > 0) if ($data[0]['campana'] == $row['nombre']) echo "selected";?>     value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="zona_fria">
                        <div class="subtitle">Zona Fría</div>
                        <label for="frigobar">Frigobar</label>
                        <select <?= $input_deactivate?> name="frigobar" id="frigobar">
                            <option value="0"></option>

                            <?php
                            $result = $pedidos->get("frigobares");
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    ?>
                                    <option <?php if (count($data) > 0) if ($data[0]['frigobar'] == $row['nombre']) echo "selected";?>    value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <label for="refrigerador">Refrigerador</label>
                        <select <?= $input_deactivate?> name="refrigerador" id="refrigerador">
                            <option value="0"></option>

                            <?php
                            $result = $pedidos->get("refrigeradores");
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    ?>
                                    <option <?php if (count($data) > 0) if ($data[0]['refrigerador'] == $row['nombre']) echo "selected";?>    value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <label for="enfriador_vino">Enfriador de Vino</label>
                        <select <?= $input_deactivate?> name="enfriador_vino" id="enfriador_vino">
                            <option value="0"></option>

                            <?php
                            $result = $pedidos->get("enfriadores_vino");
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    ?>
                                    <option <?php if (count($data) > 0) if ($data[0]['enfriador_vino'] == $row['nombre']) echo "selected";?>     value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="zona_agua">
                        <div class="subtitle">Zona Agua</div>
                        <label for="lavavajillas">Lavavajillas</label>
                        <select <?= $input_deactivate?> name="lavavajillas" id="lavavajillas">
                            <option value="0"></option>

                            <?php
                            $result = $pedidos->get("lavavajillas");
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    ?>
                                    <option <?php if (count($data) > 0) if ($data[0]['lavavajilla'] == $row['nombre']) echo "selected";?>     value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <label for="tarja">Tarja</label>
                        <select <?= $input_deactivate?> name="tarja" id="tarja">
                            <option value="0"></option>

                            <?php
                            $result = $pedidos->get("tarjas");
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    ?>
                                    <option <?php if (count($data) > 0) if ($data[0]['tarja'] == $row['nombre']) echo "selected";?>     value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <label for="monomando">Monomando</label>
                        <select <?= $input_deactivate?> name="monomando" id="monomando">
                            <option value="0"></option>

                            <?php
                            $result = $pedidos->get("monomandos");
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    ?>
                                    <option <?php if (count($data) > 0) if ($data[0]['monomando'] == $row['nombre']) echo "selected";?>     value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <label for="kit">Kit</label>
                        <select <?= $input_deactivate?> name="kit" id="kit">
                            <option value="0"></option>

                            <?php
                            $result = $pedidos->get("kits");
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    ?>
                                    <option <?php if (count($data) > 0) if ($data[0]['kit'] == $row['nombre']) echo "selected";?>        value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <label for="triturador">Triturador</label>
                        <select <?= $input_deactivate?> name="triturador" id="triturador">
                            <option value="0"></option>

                            <?php
                            $result = $pedidos->get("trituradores");
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    ?>
                                    <option <?php if (count($data) > 0) if ($data[0]['triturador'] == $row['nombre']) echo "selected";?>    value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" name="submitEquipo" <?php if ($_SESSION["type"] === 3 || $_SESSION["type"] === 4 ) echo "style='display:none'" ?>>Guardar</button>
                </div>
                </form>
            </div>

            <div id="imagenes_referencia">
                <form method="post" enctype="multipart/form-data">
                    <input <?= $input_deactivate?> type="hidden" name="pedidoId" value="<?= $pedidoId?>" />
                    <div class="title">
                        Imagenes de Referencia
                    </div>
                    <div class="contenido_form">
                        <div class="card">
                            <label for="plano" class="label-file">
                                <img src="img/Icons_Process/subir.svg" alt="x">
                                <div class="subtitle">Adjuntar plano (PNG, JPG, JPEG)</div>
                            </label>
                            <input <?= $input_deactivate?> type="file" name="image" id="plano">
                        </div>
                        <button type="submit" name="submitImg" <?php if ($_SESSION["type"] === 3 || $_SESSION["type"] === 4 ) echo "style='display:none'" ?>>Guardar</button>
                    </div>
                </form>
            </div>

            <div>
                <a href="pedidos.php">
                    <button type="button" class="crear_pedido">He terminado de revisar el pedido</button>
                </a>
            </div>

        </div>
    </div>
<?php include 'inc/modal_profile.php'; ?>

    <script src="../src/lib/js/nav.js"></script>
    <script src="../src/lib/js/crear_pedido.js"></script>

</body>

</html>