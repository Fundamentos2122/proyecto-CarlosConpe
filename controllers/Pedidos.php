<?php

class PedidoController
{
    public function __construct()
    {

    }

    public function createPedido($id, $id_cliente, $tipo_diseño, $tipo_cotizacion)
    {
        global $mysqli;
        $id_vendedor = $_SESSION["id"];
        $array = [];

        $sql = "SELECT id FROM pedidos WHERE id = ?";

        if($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("i", $param_id);
            $param_id = $id;
            if ($stmt->execute()) {
                $stmt->store_result();
                if ($stmt->num_rows == 1) {

                    $sql = "UPDATE `pedidos` set  `id_cliente` = ?, `tipo_diseño` = ?, `tipo_cotizacion` = ? where id = ?";

//        $sql = "INSERT INTO `pedidos`(`id`, `id_cliente`, `tipo_diseño`, `tipo_cotizacion`, `jaladera`, `herraje`, `material`, `color`, `parrilla`, `horno`, `estufa`, `microondas`, `campana`, `frigobar`, `refrigerador`, `enfriador_vino`, `lavavajilla`, `tarja`, `monomando`, `kit`, `triturador`, `id_vendedor`,`plano`, `imagen`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
//         id, id_cliente, tipo_diseño, tipo_cotizacion, jaladera, herraje, material, color, parrilla, horno, estufa, microondas, campana, frigobar, refrigerador, enfriador_vino, lavavajilla, tarja, monomando, kit, triturador, id_vendedor, plano, imagen
//        $param_id, $param_id_cliente, $param_tipo_diseño, $param_tipo_cotizacion, $param_jaladera, $param_herraje, $param_material, $param_color, $param_parrilla, $param_horno, $param_estufa, $param_microondas, $param_campana, $param_frigobar, $param_refrigerador, $param_enfriador_vino, $param_lavavajilla, $param_tarja, $param_monomando, $param_kit, $param_triturador, $param_id_vendedor, $param_plano, $param_imagen

                    if ($stmt = $mysqli->prepare($sql))
                        $stmt->bind_param("iiii",$param_id_cliente, $param_tipo_diseño, $param_tipo_cotizacion, $param_id );
                    $param_id = $id;
                    $param_id_cliente = $id_cliente;
                    $param_tipo_diseño = $tipo_diseño;
                    $param_tipo_cotizacion = $tipo_cotizacion;


                    if ($stmt->execute()) {
                        $stmt->store_result();
                        if ($stmt->num_rows > 0) {
                            $stmt->bind_result($id_cliente, $tipo_diseño, $tipo_cotizacion, $id);
                            while ($stmt->fetch()) {

                            }
                        }
                        $stmt->close();
                    }
                } else {
                    $sql = "INSERT INTO `pedidos`(`id`, `id_cliente`, `id_vendedor`, `tipo_diseño`, `tipo_cotizacion`) VALUES (?, ?, ?, ?, ?);";

//        $sql = "INSERT INTO `pedidos`(`id`, `id_cliente`, `tipo_diseño`, `tipo_cotizacion`, `jaladera`, `herraje`, `material`, `color`, `parrilla`, `horno`, `estufa`, `microondas`, `campana`, `frigobar`, `refrigerador`, `enfriador_vino`, `lavavajilla`, `tarja`, `monomando`, `kit`, `triturador`, `id_vendedor`,`plano`, `imagen`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
//         id, id_cliente, tipo_diseño, tipo_cotizacion, jaladera, herraje, material, color, parrilla, horno, estufa, microondas, campana, frigobar, refrigerador, enfriador_vino, lavavajilla, tarja, monomando, kit, triturador, id_vendedor, plano, imagen
//        $param_id, $param_id_cliente, $param_tipo_diseño, $param_tipo_cotizacion, $param_jaladera, $param_herraje, $param_material, $param_color, $param_parrilla, $param_horno, $param_estufa, $param_microondas, $param_campana, $param_frigobar, $param_refrigerador, $param_enfriador_vino, $param_lavavajilla, $param_tarja, $param_monomando, $param_kit, $param_triturador, $param_id_vendedor, $param_plano, $param_imagen

                    if ($stmt = $mysqli->prepare($sql))
                        $stmt->bind_param("iiiii",$param_id, $param_id_cliente, $param_id_vendedor, $param_tipo_diseño, $param_tipo_cotizacion);
                    $param_id = $id;
                    $param_id_cliente = $id_cliente;
                    $param_id_vendedor = $id_vendedor;
                    $param_tipo_diseño = $tipo_diseño;
                    $param_tipo_cotizacion = $tipo_cotizacion;

                    if ($stmt->execute()) {
                        $stmt->store_result();
                        if ($stmt->num_rows > 0) {
                            $stmt->bind_result($id, $id_cliente, $id_vendedor, $tipo_diseño, $tipo_cotizacion);
                            while ($stmt->fetch()) {

                            }
                        }
                        $stmt->close();
                    }
                    return $array;
                }
            }
        }
    }

    public function updatePedido($id, $material, $jaladera, $herraje, $plano)
    {
        global $mysqli;

        $id_vendedor = $_SESSION["id"];
        $array = [];
        $sql = "UPDATE `pedidos` set  `material` = ?, `jaladera` = ?, `herraje` = ?, `plano` = ? where id = ?";

//        $sql = "INSERT INTO `pedidos`(`id`, `id_cliente`, `tipo_diseño`, `tipo_cotizacion`, `jaladera`, `herraje`, `material`, `color`, `parrilla`, `horno`, `estufa`, `microondas`, `campana`, `frigobar`, `refrigerador`, `enfriador_vino`, `lavavajilla`, `tarja`, `monomando`, `kit`, `triturador`, `id_vendedor`,`plano`, `imagen`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
//         id, id_cliente, tipo_diseño, tipo_cotizacion, jaladera, herraje, material, color, parrilla, horno, estufa, microondas, campana, frigobar, refrigerador, enfriador_vino, lavavajilla, tarja, monomando, kit, triturador, id_vendedor, plano, imagen
//        $param_id, $param_id_cliente, $param_tipo_diseño, $param_tipo_cotizacion, $param_jaladera, $param_herraje, $param_material, $param_color, $param_parrilla, $param_horno, $param_estufa, $param_microondas, $param_campana, $param_frigobar, $param_refrigerador, $param_enfriador_vino, $param_lavavajilla, $param_tarja, $param_monomando, $param_kit, $param_triturador, $param_id_vendedor, $param_plano, $param_imagen

        if ($stmt = $mysqli->prepare($sql))
            $stmt->bind_param("iiibi",$param_material, $param_jaladera, $param_herraje, $param_plano, $param_id);
        $param_id = $id;
        $param_material = $material;
        $param_jaladera = $jaladera;
        $param_herraje = $herraje;
        $param_plano = $plano;

        if ($stmt->execute()) {
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($material, $jaladera, $herraje, $plano, $id);
                while ($stmt->fetch()) {

                }
            }
            $stmt->close();
        }
        return $array;
    }

    public function updatePedidoColor($id, $color)
    {
        global $mysqli;

        $array = [];
        $sql = "UPDATE `pedidos` set  `color` = ? where id = ?";

//        $sql = "INSERT INTO `pedidos`(`id`, `id_cliente`, `tipo_diseño`, `tipo_cotizacion`, `jaladera`, `herraje`, `material`, `color`, `parrilla`, `horno`, `estufa`, `microondas`, `campana`, `frigobar`, `refrigerador`, `enfriador_vino`, `lavavajilla`, `tarja`, `monomando`, `kit`, `triturador`, `id_vendedor`,`plano`, `imagen`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
//         id, id_cliente, tipo_diseño, tipo_cotizacion, jaladera, herraje, material, color, parrilla, horno, estufa, microondas, campana, frigobar, refrigerador, enfriador_vino, lavavajilla, tarja, monomando, kit, triturador, id_vendedor, plano, imagen
//        $param_id, $param_id_cliente, $param_tipo_diseño, $param_tipo_cotizacion, $param_jaladera, $param_herraje, $param_material, $param_color, $param_parrilla, $param_horno, $param_estufa, $param_microondas, $param_campana, $param_frigobar, $param_refrigerador, $param_enfriador_vino, $param_lavavajilla, $param_tarja, $param_monomando, $param_kit, $param_triturador, $param_id_vendedor, $param_plano, $param_imagen

        if ($stmt = $mysqli->prepare($sql))
            $stmt->bind_param("ii",$param_color, $param_id);
        $param_id = $id;
        $param_color =$color;

        if ($stmt->execute()) {
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($color, $id);
                while ($stmt->fetch()) {

                }
            }
            $stmt->close();
        }
        return $array;
    }

    public function updatePedidoImage($id, $image)
    {
        global $mysqli;

        $array = [];
        $sql = "UPDATE `pedidos` set  `imagen` = ? where id = ?";

        if ($stmt = $mysqli->prepare($sql))
            $stmt->bind_param("bi",$param_image, $param_id);
        $param_id = $id;
        $param_image =$image;

        if ($stmt->execute()) {
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($image, $id);
                while ($stmt->fetch()) {

                }
            }
            $stmt->close();
        }
        return $array;
    }

    public function updatePedidoEquipo($id, $campana, $enfriador_vino, $estufa, $frigobar, $horno, $kit, $lavavajillas,
    $microondas, $monomando, $parrilla, $refrigerador, $tarja, $triturador)
    {
        global $mysqli;

        $array = [];
        $sql = "UPDATE `pedidos` set  `campana` = ?, `enfriador_vino` = ?, `estufa` = ?, `frigobar` = ?, `horno` = ?,
                     `kit` = ?, `lavavajilla` = ?, `microondas` = ?, `monomando` = ?, `parrilla` = ?,
                     `refrigerador` = ?, `tarja` = ?, `triturador` = ? where id = ?";

//        $sql = "INSERT INTO `pedidos`(`id`, `id_cliente`, `tipo_diseño`, `tipo_cotizacion`, `jaladera`, `herraje`, `material`, `color`, `parrilla`, `horno`, `estufa`, `microondas`, `campana`, `frigobar`, `refrigerador`, `enfriador_vino`, `lavavajilla`, `tarja`, `monomando`, `kit`, `triturador`, `id_vendedor`,`plano`, `imagen`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
//         id, id_cliente, tipo_diseño, tipo_cotizacion, jaladera, herraje, material, color, parrilla, horno, estufa, microondas, campana, frigobar, refrigerador, enfriador_vino, lavavajilla, tarja, monomando, kit, triturador, id_vendedor, plano, imagen
//        $param_id, $param_id_cliente, $param_tipo_diseño, $param_tipo_cotizacion, $param_jaladera, $param_herraje, $param_material, $param_color, $param_parrilla, $param_horno, $param_estufa, $param_microondas, $param_campana, $param_frigobar, $param_refrigerador, $param_enfriador_vino, $param_lavavajilla, $param_tarja, $param_monomando, $param_kit, $param_triturador, $param_id_vendedor, $param_plano, $param_imagen

        if ($stmt = $mysqli->prepare($sql))
            $stmt->bind_param("iiiiiiiiiiiiii",$param_campana, $param_enfriador_vino, $param_estufa,
                        $param_frigobar, $param_horno, $param_kit, $param_lavavajillas, $param_microonadas,
                        $param_monomando, $param_parrilla, $param_refrigerador, $param_tarja, $param_triturador, $param_id);
        $param_id = $id;
        $param_campana = $campana;
        $param_enfriador_vino = $enfriador_vino;
        $param_estufa = $estufa;
        $param_frigobar = $frigobar;
        $param_horno = $horno;
        $param_kit = $kit;
        $param_lavavajillas = $lavavajillas;
        $param_microonadas = $microondas;
        $param_monomando = $monomando;
        $param_parrilla = $parrilla;
        $param_refrigerador = $refrigerador;
        $param_tarja = $tarja;
        $param_triturador = $triturador;


        if ($stmt->execute()) {
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($campana, $enfriador_vino, $estufa, $frigobar, $horno,
                                    $kit, $lavavajillas, $microondas, $monomando, $parrilla, $refrigerador,
                                    $tarja, $triturador,$id);
                while ($stmt->fetch()) {

                }
            }
            $stmt->close();
        }
        return $array;
    }

    public function get($table){
        global $mysqli;
        $array = [];
        $sql = "SELECT id, nombre from $table";
        if ($table === "colores"){
            $sql = "SELECT id, nombre, hex from $table";
        }
        if ($stmt = $mysqli->prepare($sql)) {
            if ($stmt->execute()) {
                $stmt->store_result();
                if ($stmt->num_rows > 0) {
                    if ($table === "colores"){
                        $stmt->bind_result($id, $nombre, $hex);
                    } else {
                        $stmt->bind_result($id, $nombre);
                    }
                    while ($stmt->fetch()) {
                        if ($table === "colores"){
                            array_push($array , [
                                "id" => $id,
                                "nombre" => $nombre,
                                "hex"=> $hex
                            ]);
                        } else{
                            array_push($array , [
                                "id" => $id,
                                "nombre" => $nombre,
                            ]);
                        }
                    }
                }
                $stmt->close();
            }
            return $array;
        }
    }

    public function consult($id)
    {
        global $mysqli;

        $array = [];
        $sql = "SELECT pedidos.id, id_cliente, tipo_diseño, tipo_cotizacion, j.nombre, h.nombre,
       m.nombre, c2.nombre, p.nombre, h2.nombre, e.nombre, m2.nombre, c.nombre, f.nombre, r.nombre,
       ev.nombre, l.nombre, t.nombre, m3.nombre, k.nombre, t2.nombre, pedidos.id_vendedor, pedidos.plano, pedidos.imagen
       FROM pedidos
    join campanas c on c.id = pedidos.campana
    join colores c2 on c2.id = pedidos.color
    join enfriadores_vino ev on ev.id = pedidos.enfriador_vino
    join estufas e on e.id = pedidos.estufa
    join frigobares f on f.id = pedidos.frigobar
    join herrajes h on h.id = pedidos.herraje
    join hornos h2 on h2.id = pedidos.horno
    join jaladeras j on j.id = pedidos.jaladera
    join kits k on k.id = pedidos.kit
    join lavavajillas l on l.id = pedidos.lavavajilla
    join materiales m on pedidos.material = m.id
    join microondas m2 on pedidos.microondas = m2.id
    join monomandos m3 on pedidos.monomando = m3.id
    join parrillas p on pedidos.parrilla = p.id
    join refrigeradores r on pedidos.refrigerador = r.id
    join tarjas t on pedidos.tarja = t.id
    join trituradores t2 on pedidos.triturador = t2.id where pedidos.id = ?";

        if ($stmt = $mysqli->prepare($sql))
            $stmt->bind_param("i",$param_id);
        $param_id = $id;

//        $sql = "INSERT INTO `pedidos`(`id`, `id_cliente`, `tipo_diseño`, `tipo_cotizacion`, `jaladera`, `herraje`, `material`, `color`, `parrilla`, `horno`, `estufa`, `microondas`, `campana`, `frigobar`, `refrigerador`, `enfriador_vino`, `lavavajilla`, `tarja`, `monomando`, `kit`, `triturador`, `id_vendedor`,`plano`, `imagen`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
//        id, id_cliente, tipo_diseño, tipo_cotizacion, jaladera, herraje, material, color, parrilla, horno, estufa, microondas, campana, frigobar, refrigerador, enfriador_vino, lavavajilla, tarja, monomando, kit, triturador, id_vendedor, plano, imagen
//        $param_id, $param_id_cliente, $param_tipo_diseño, $param_tipo_cotizacion, $param_jaladera, $param_herraje, $param_material, $param_color, $param_parrilla, $param_horno, $param_estufa, $param_microondas, $param_campana, $param_frigobar, $param_refrigerador, $param_enfriador_vino, $param_lavavajilla, $param_tarja, $param_monomando, $param_kit, $param_triturador, $param_id_vendedor, $param_plano, $param_imagen

        if ($stmt->execute()) {
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $stmt->bind_result(        $id, $id_cliente, $tipo_diseño, $tipo_cotizacion, $jaladera, $herraje, $material, $color, $parrilla, $horno, $estufa, $microondas, $campana, $frigobar, $refrigerador, $enfriador_vino, $lavavajilla, $tarja, $monomando, $kit, $triturador, $id_vendedor, $plano, $imagen);
                while ($stmt->fetch()) {
                    array_push($array , [
                        "id" => $id,
                        "id_cliente" => $id_cliente,
                        "tipo_diseño" => $tipo_diseño,
                        "tipo_cotizacion" =>$tipo_cotizacion,
                        "jaladera" => $jaladera,
                        "herraje" =>$herraje,
                        "material" =>$material,
                        "color"=>$color,
                        "parrilla"=>$parrilla,
                        "horno" => $horno,
                        "estufa"=>$estufa,
                        "microondas" =>$microondas,
                        "campana"=>$campana,
                        "frigobar" => $frigobar,
                        "refrigerador" => $refrigerador,
                        "enfriador_vino" => $enfriador_vino,
                        "lavavajilla" =>$lavavajilla,
                        "tarja" =>$tarja,
                        "monomando" => $monomando,
                        "kit" =>$kit,
                        "triturador" => $triturador,
                        "id_vendedor" =>$id_vendedor,
                        "plano" =>$plano,
                        "imagen" =>$imagen
                    ]);
                }
            }
            $stmt->close();
        }
        return $array;
    }

    public function pedidosInfo()
    {
        global $mysqli;

        $id_vendedor = $_SESSION["id"];

        $array = [];

        $sql = "SELECT pedidos.id, pedidos.tipo_diseño, pedidos.tipo_cotizacion, etapa, telefono, correo, nombre from pedidos join users_secondary us on us.id = pedidos.id_cliente where pedidos.id_vendedor = ?;";
        if ($_SESSION["type"] === 1){
            $sql = "SELECT pedidos.id, pedidos.tipo_diseño, pedidos.tipo_cotizacion, etapa, telefono, correo, nombre from pedidos join users_secondary us on us.id = pedidos.id_cliente";
        }
        if ($stmt = $mysqli->prepare($sql)){}
        if ($_SESSION["type"] !== 1) {
            $stmt->bind_param("i", $param_id_vendedor);
            $param_id_vendedor = $id_vendedor;
        }


        if ($stmt->execute()) {
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id,  $tipo_diseño, $tipo_cotizacion, $etapa, $telefono, $correo, $nombre);
                while ($stmt->fetch()) {
                    array_push($array , [
                        "id" => $id,
                        "etapa" => $etapa,
                        "tel" => $telefono,
                        "correo" => $correo,
                        "nombre" => $nombre,
                        "diseño" => $tipo_diseño,
                        "cotizacion" => $tipo_cotizacion
                    ]);
                }
            }
            $stmt->close();
        }
        return $array;
    }

    public function pedidosInfoClientes()
    {
        global $mysqli;

        $id_vendedor = $_SESSION["id"];

        $array = [];
        $sql = "SELECT pedidos.id, pedidos.tipo_diseño, pedidos.tipo_cotizacion, etapa, telefono, correo, nombre from pedidos join users_secondary us on us.id = pedidos.id_cliente where pedidos.id_cliente = ?;";

        if ($stmt = $mysqli->prepare($sql)){}
        $stmt->bind_param("i",$param_id_vendedor);

        $param_id_vendedor = $id_vendedor;

        if ($stmt->execute()) {
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id,  $tipo_diseño, $tipo_cotizacion, $etapa, $telefono, $correo, $nombre);
                while ($stmt->fetch()) {
                    array_push($array , [
                        "id" => $id,
                        "etapa" => $etapa,
                        "tel" => $telefono,
                        "correo" => $correo,
                        "nombre" => $nombre,
                        "diseño" => $tipo_diseño,
                        "cotizacion" => $tipo_cotizacion
                    ]);
                }
            }
            $stmt->close();
        }
        return $array;
    }

    public function pedidoChangeState($id, $estado)
    {
        global $mysqli;

        $array = [];
        $sql = "UPDATE `pedidos` set  `etapa` = ? where id = ?";

//        $sql = "INSERT INTO `pedidos`(`id`, `id_cliente`, `tipo_diseño`, `tipo_cotizacion`, `jaladera`, `herraje`, `material`, `color`, `parrilla`, `horno`, `estufa`, `microondas`, `campana`, `frigobar`, `refrigerador`, `enfriador_vino`, `lavavajilla`, `tarja`, `monomando`, `kit`, `triturador`, `id_vendedor`,`plano`, `imagen`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
//         id, id_cliente, tipo_diseño, tipo_cotizacion, jaladera, herraje, material, color, parrilla, horno, estufa, microondas, campana, frigobar, refrigerador, enfriador_vino, lavavajilla, tarja, monomando, kit, triturador, id_vendedor, plano, imagen
//        $param_id, $param_id_cliente, $param_tipo_diseño, $param_tipo_cotizacion, $param_jaladera, $param_herraje, $param_material, $param_color, $param_parrilla, $param_horno, $param_estufa, $param_microondas, $param_campana, $param_frigobar, $param_refrigerador, $param_enfriador_vino, $param_lavavajilla, $param_tarja, $param_monomando, $param_kit, $param_triturador, $param_id_vendedor, $param_plano, $param_imagen

        if ($stmt = $mysqli->prepare($sql))
            $stmt->bind_param("si",$param_etapa, $param_id);
        $param_id = $id;
        $param_etapa =$estado;

        if ($stmt->execute()) {
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($estado, $id);
                while ($stmt->fetch()) {

                }
            }
            $stmt->close();
        }
        return $array;
    }

}
?>