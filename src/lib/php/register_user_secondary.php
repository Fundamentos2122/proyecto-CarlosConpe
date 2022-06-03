
<?php
include 'inc/header.php';
require_once '../config/database.php';

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

// Define variables and initialize with empty values
$username = $password = $confirm_password = $type = "";
$username_err = $password_err = $type_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitProspecto"])){
    // Validate username
    if(empty(trim($_POST["username_prospecto"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username_prospecto"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users_secondary WHERE username = ?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username_prospecto"]);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();

                if($stmt->num_rows == 1){
                    $username_err = "Este usuario ya ha sido tomado";
                } else{
                    $username = trim($_POST["username_prospecto"]);
                }
            } else{
                echo "Error al realizar el registro";
            }

            // Close statement
            $stmt->close();
        }
    }

    if(empty(trim($_POST["password_prospecto"]))){
        $password_err = "Por favor entra una contraseña";
    } elseif(strlen(trim($_POST["password_prospecto"])) < 6){
        $password_err = "La contraseña debe de ser de al menos 6 caracteres";
    } else{
        $password = trim($_POST["password_prospecto"]);
    }

    if(empty(trim($_POST["type_prospecto"]))){
        $type_err = "Please enter a type";
    } elseif(trim($_POST["type_prospecto"]) > 3){
        $type_err = "Enter a valid type";
    } elseif(trim($_POST["type_prospecto"]) < 1){
        $type_err = "Enter a valid type";
    } else{
        $type = trim($_POST["type_prospecto"]);
    }

    if(empty(trim($_POST["nombre_prospecto"]))){
        $nombre_prospecto = "";
    } else{
        $nombre_prospecto = trim($_POST["nombre_prospecto"]);
    }

    if(empty(trim($_POST["telefono_prospecto"]))){
        $telefono_prospecto = "";
    } else{
        $telefono_prospecto = trim($_POST["telefono_prospecto"]);
    }

    if(empty(trim($_POST["correo_prospecto"]))){
        $correo_prospecto = "";
    } else{
        $correo_prospecto = trim($_POST["correo_prospecto"]);
    }


    if(empty(trim($_POST["confirm_password_prospecto"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password_prospecto"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    $id_vendedor = $_SESSION["id"];
    console_log($id_vendedor);



    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($type_err)){
        $sql = "INSERT INTO users_secondary (username, password, type, nombre, telefono, correo, id_vendedor) VALUES (?, ?, ?, ?, ?, ?, ?)";

        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("ssisssi", $param_username, $param_password, $param_type, $param_nombre, $param_telefono, $param_correo, $param_id_vendedor);
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_type = $type;
            $param_nombre = $nombre_prospecto;
            $param_telefono = $telefono_prospecto;
            $param_correo = $correo_prospecto;
            $param_id_vendedor = $id_vendedor;

            if($stmt->execute()){
                echo <<<'EOT'
                    <aside class="responsive-banner">
                        <div class="container-envelope">
                            <p>Usuario creado Correctamente</p>
                            <a href="crm.php" class="more-link">Volver</a>
                        </div>
                    </aside>
EOT;

            } else{
                echo "Error al crear el usuario";
            }

            $stmt->close();
        }
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitCliente"])){
    // Validate username
    if(empty(trim($_POST["username_cliente"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username_cliente"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users_secondary WHERE username = ?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username_cliente"]);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();

                if($stmt->num_rows == 1){
                    $username_err = "Este usuario ya ha sido tomado";
                } else{
                    $username = trim($_POST["username_cliente"]);
                }
            } else{
                echo "Error al realizar el registro";
            }

            // Close statement
            $stmt->close();
        }
    }

    if(empty(trim($_POST["password_cliente"]))){
        $password_err = "Por favor entra una contraseña";
    } elseif(strlen(trim($_POST["password_cliente"])) < 6){
        $password_err = "La contraseña debe de ser de al menos 6 caracteres";
    } else{
        $password = trim($_POST["password_cliente"]);
    }

    if(empty(trim($_POST["type_cliente"]))){
        $type_err = "Please enter a type";
    } elseif(trim($_POST["type_cliente"]) > 4){
        $type_err = "Enter a valid type";
    } elseif(trim($_POST["type_cliente"]) < 1){
        $type_err = "Enter a valid type";
    } else{
        $type = trim($_POST["type_cliente"]);
    }

    if(empty(trim($_POST["nombre_cliente"]))){
        $nombre_cliente = "";
    } else{
        $nombre_cliente = trim($_POST["nombre_cliente"]);
    }

    if(empty(trim($_POST["telefono_cliente"]))){
        $telefono_cliente = "";
    } else{
        $telefono_cliente = trim($_POST["telefono_cliente"]);
    }

    if(empty(trim($_POST["correo_cliente"]))){
        $correo_cliente = "";
    } else{
        $correo_cliente = trim($_POST["correo_cliente"]);
    }


    if(empty(trim($_POST["confirm_password_cliente"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password_cliente"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    $id_vendedor = $_SESSION["id"];
    console_log($id_vendedor);
    console_log($username_err);
    console_log($password_err);
    console_log($confirm_password_err);

    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($type_err)){
        $sql = "INSERT INTO users_secondary (username, password, type, nombre, telefono, correo, id_vendedor) VALUES (?, ?, ?, ?, ?, ?, ?)";

        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("ssisssi", $param_username, $param_password, $param_type, $param_nombre, $param_telefono, $param_correo, $param_id_vendedor);
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_type = $type;
            $param_nombre = $nombre_cliente;
            $param_telefono = $telefono_cliente;
            $param_correo = $correo_cliente;
            $param_id_vendedor = $id_vendedor;

            if($stmt->execute()){
                echo <<<'EOT'
                    <aside class="responsive-banner">
                        <div class="container-envelope">
                            <p>Usuario creado Correctamente</p>
                            <a href="crm.php" class="more-link">Volver</a>
                        </div>
                    </aside>
EOT;
            } else{
                echo "Error al crear el usuario";
            }

            $stmt->close();
        }
    }
}
?>


