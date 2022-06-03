<?php

class ProspectController
{
    public function __construct()
    {
        require_once '../config/database.php';
    }

    public function index()
    {
        global $mysqli;
        $arrayProspectos = [];
        $id = $_SESSION["id"];
        $sql = "SELECT id, username, telefono, correo, nombre from users_secondary where id_vendedor = ? and type = 3";
        if ($_SESSION["type"] === 1){
            $sql = "SELECT id, username, telefono, correo, nombre from users_secondary where type = 3";
        }
        if ($stmt = $mysqli->prepare($sql)) {
            if ($_SESSION["type"] !==1){
                $stmt->bind_param("i", $param_id);
                $param_id = $id;
            }

            if ($stmt->execute()) {
                $stmt->store_result();
                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($idx, $username, $telefono, $correo, $nombre);
                    while ($stmt->fetch()) {
                        array_push($arrayProspectos , [
                            "id" => $idx,
                            "username" => $username,
                            "telefono" => $telefono,
                            "correo" => $correo,
                            "nombre" => $nombre
                        ]);
                    }
                }
                $stmt->close();
            }
            return $arrayProspectos;
        }
    }
}
?>