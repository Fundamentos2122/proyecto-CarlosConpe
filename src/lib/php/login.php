<?php

global $mysqli;

session_start();
$host = $_SERVER['HTTP_HOST'];
$ruta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    switch ($_SESSION["type"]){
        case 1:
            $html = 'admin.php';
            $url = "http://$host$ruta/$html";
            header("Location: $url");
            break;
        case 2:
            $html = 'crm.php';
            $url = "http://$host$ruta/$html";
            header("Location: $url");
            break;
        case 3:
            $html = 'pedidos.php';
            $url = "http://$host$ruta/$html";
            header("Location: $url");
            break;
        case 4:
            $html = 'pedidos.php';
            $url = "http://$host$ruta/$html";
            header("Location: $url");
            break;
    }
    exit;
}

$username = $password = "";
$username_err = $password_err = $login_err = "";



if (basename($_SERVER['PHP_SELF']) === 'index.php'){
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty(trim($_POST["username"]))){
            $username_err = "Por favor, introduce un usuario valido";
        } else{
            $username = trim($_POST["username"]);
        }

        if(empty(trim($_POST["password"]))){
            $password_err = "Por favor, introduce la contraseña";
        } else{
            $password = trim($_POST["password"]);
        }

        if(empty($username_err) && empty($password_err)){
            $sql = "SELECT id, username, password, type, nombre FROM users_secondary WHERE username = ?";

            if($stmt = $mysqli->prepare($sql)){
                $stmt->bind_param("s", $param_username);

                $param_username = $username;

                if($stmt->execute()){
                    $stmt->store_result();

                    if($stmt->num_rows == 1){
                        $stmt->bind_result($id, $username, $hashed_password, $type, $nombre);
                        if($stmt->fetch()){
                            if(password_verify($password, $hashed_password)){
                                session_start();

                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;
                                $_SESSION["type"] = $type;
                                $_SESSION["nombre"] = $nombre;

                                switch ($_SESSION["type"]){
                                    case 1:
                                        $html = 'admin.php';
                                        $url = "http://$host$ruta/$html";
                                        header("Location: $url");
                                        break;
                                    case 2:
                                        $html = 'crm.php';
                                        $url = "http://$host$ruta/$html";
                                        header("Location: $url");
                                        break;
                                    case 3:
                                        $html = 'pedidos.php';
                                        $url = "http://$host$ruta/$html";
                                        header("Location: $url");
                                        break;
                                    case 4:
                                        $html = 'pedidos.php';
                                        $url = "http://$host$ruta/$html";
                                        header("Location: $url");
                                        break;
                                }
                            } else{
                                $login_err = "Usuario o Contraseña invalida";
                            }
                        }
                    } else{
                        $login_err = "Usuario o Contraseña invalida";
                    }
                } else{
                    echo "Error en inicio de sesión";
                }

                // Close statement
                $stmt->close();
            }
        }

        // Close connection
        $mysqli->close();
    }
} elseif ((basename($_SERVER['PHP_SELF']) === 'login_vendedor.php')){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(trim($_POST["username"]))){
            $username_err = "Por favor, introduce un usuario valido";
        } else{
            $username = trim($_POST["username"]);
        }

        if(empty(trim($_POST["password"]))){
            $password_err = "Por favor, introduce una contraseña";
        } else{
            $password = trim($_POST["password"]);
        }

        if(empty($username_err) && empty($password_err)){
            $sql = "SELECT id, username, password, type FROM users WHERE username = ?";

            if($stmt = $mysqli->prepare($sql)){
                $stmt->bind_param("s", $param_username);

                $param_username = $username;

                if($stmt->execute()){
                    $stmt->store_result();

                    if($stmt->num_rows == 1){
                        $stmt->bind_result($id, $username, $hashed_password, $type);
                        if($stmt->fetch()){
                            if(password_verify($password, $hashed_password)){
                                session_start();

                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;
                                $_SESSION["type"] = $type;

                                switch ($_SESSION["type"]){
                                    case 1:
                                        $html = 'admin.php';
                                        $url = "http://$host$ruta/$html";
                                        header("Location: $url");
                                        break;
                                    case 2:
                                        $html = 'crm.php';
                                        $url = "http://$host$ruta/$html";
                                        header("Location: $url");
                                        break;
                                    case 3:
                                        $html = 'pedidos.php';
                                        $url = "http://$host$ruta/$html";
                                        header("Location: $url");
                                        break;
                                    case 4:
                                        $html = 'pedidos.php';
                                        $url = "http://$host$ruta/$html";
                                        header("Location: $url");
                                        break;
                                }
                            } else{
                                $login_err = "Usuario o Contraseña invalida";
                            }
                        }
                    } else{
                        $login_err = "Usuario o Contraseña invalida";
                    }
                } else{
                    echo "Error en inicio de sesión";
                }

                // Close statement
                $stmt->close();
            }
        }

        // Close connection
        $mysqli->close();
    }
}




?>