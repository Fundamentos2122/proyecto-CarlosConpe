<?php

class UserController
{
    public function __construct()
    {

    }

    public function index()
    {
        global $mysqli;
        $arrayClientes = [];
        $id = $_SESSION["id"];
        $sql = "SELECT id, username, type, password from users";
        if ($stmt = $mysqli->prepare($sql)) {
//
//            $stmt->bind_param("i", $param_id);
//            $param_id = $id;

            if ($stmt->execute()) {
                $stmt->store_result();
                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($id, $username, $type, $password);
                    while ($stmt->fetch()) {
                        array_push($arrayClientes , [
                            "id" => $id,
                            "username" => $username,
                            "type" => $type,
                            "password" => $password
                        ]);
                    }
                }
                $stmt->close();
            }
            return $arrayClientes;
        }
    }
}
?>