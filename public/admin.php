

<?php
include 'inc/header.php';
include_once '../controllers/Usuarios.php';
require_once '../config/database.php';

$username = $password = $confirm_password = $type = "";
$username_err = $password_err = $type_err = $confirm_password_err = "";
global $mysqli;

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["id"] === ''){

    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_username);

            $param_username = trim($_POST["username"]);

            if($stmt->execute()){
                // store result
                $stmt->store_result();

                if($stmt->num_rows == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    if(empty(trim($_POST["type"]))){
        $type_err = "Please enter a type";
    } elseif(trim($_POST["type"]) > 3){
        $type_err = "Enter a valid type";
    } elseif(trim($_POST["type"]) < 1){
        $type_err = "Enter a valid type";
    } else{
        $type = trim($_POST["type"]);
    }


    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($type_err)){

        $sql = "INSERT INTO users (username, password, type) VALUES (?, ?, ?)";

        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("ssi", $param_username, $param_password, $param_type);
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_type = $type;

            if($stmt->execute()){
                echo "Usuario creado correctamente";
                $host = $_SERVER['HTTP_HOST'];
                $ruta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                $html = 'admin.php';
                $url = "http://$host$ruta/$html";
                header("Location: $url");
            } else{
                echo "Error al crear el usuario";
            }

            $stmt->close();
            header('Location: '.$_SERVER['PHP_SELF']);

        }
    }
}

if (isset($_POST["id"])){
    global $mysqli;

    $array = [];
    $sql = "UPDATE `users` set  `type` = ?, password = ?, username = ? where id = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("issi", $param_type, $param_password, $param_username, $param_id);
        $param_id = $_POST["id"];
        $param_type = $_POST["type"];
        $param_username = $_POST["username"];
        $param_password = password_hash($password, PASSWORD_DEFAULT);
    }

    if ($stmt->execute()) {
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($color, $id);
            while ($stmt->fetch()) {

            }
        }
        $stmt->close();
    }
    header('Location: '.$_SERVER['PHP_SELF']."?id=$param_id");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>
<div class="wrapper">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="form-register" class="admin-form">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" class="form-control" placeholder=" (Poner si se desea crear un nuevo usuario)" value="<?php if (isset($_GET["id"])) echo $_GET["id"];?>">
        </div>
        <div class="form-group">
            <label>Usuario</label>
            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err; ?></span>
        </div>
        <div class="form-group">
            <label>Tipo</label>
            <input type="text" name="type" class="form-control <?php echo (!empty($type_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $type; ?>">
            <span class="invalid-feedback"><?php echo $type_err; ?></span>
        </div>
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
        </div>
        <div class="form-group">
            <label>Confirmar Contraseña</label>
            <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Crear / Editar">
            <input type="reset" class="btn btn-secondary ml-2" value="Limpiar Formulario" onclick="resetFormRegister()">
        </div>
    </form>
</div>

<table>
    <tr>
        <th>Usuario</th>
        <th>ID</th>
        <th>Tipo</th>
        <th>Contraseña</th>
    </tr>
    <?php
    $users = new UserController();
    $result = $users->index();

    if($result)
    {
        foreach($result as $row)
        {
            ?>
            <tr>
                <td><?= $row["username"]?></td>
                <td><?= $row["id"]?></td>
                <td><?= $row["type"]?></td>
                <td><?= $row["password"]?></td>
            </tr>
            <?php
        }
    }
    ?>

</table>


<?php include 'inc/modal_profile.php'; ?>

<script src="../src/lib/js/register.js"></script>
</body>
</html>