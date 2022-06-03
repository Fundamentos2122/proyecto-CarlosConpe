<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguimiento</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["type"] === 1): ?>
    <div class="Navbar">
        <div class="Navbar_Link Navbar_Link_Toggle">
            <img src="img/Icons/menu.svg" alt="menu" width="30px">
        </div>

        <div class="Navbar_Link Navbar_Link_Brand">
            <img src="img/logo-header.png" alt="logo">
        </div>

        <nav class="Navbar_Items">
            <div class="Navbar_Link Navbar_Link_Item">
                <a href="crm.php">CRM</a>
            </div>
            <div class="Navbar_Link Navbar_Link_Item">
                <a href="pedidos.php">PEDIDOS</a>
            </div>
            <div class="Navbar_Link Navbar_Link_Item">
                <a href="admin.php">VENDEDORES</a>
            </div>
        </nav>
        <nav class="Navbar_Items_Right">
            <div class="Navbar_Link">
                <a href="crear_pedido.php">
                    <button>CREAR PEDIDO</button>
                </a>
            </div>
            <div class="Navbar_Link">
                <img class="profile" id="profile" src="img/Icons/profile1.svg" alt="profile" width="35px">
            </div>
        </nav>
    </div>
<?php elseif (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["type"] === 2 ): ?>
    <div class="Navbar">
        <div class="Navbar_Link Navbar_Link_Toggle">
            <img src="img/Icons/menu.svg" alt="menu" width="30px">
        </div>

        <div class="Navbar_Link Navbar_Link_Brand">
            <img src="img/logo-header.png" alt="logo">
        </div>

        <nav class="Navbar_Items">
            <div class="Navbar_Link Navbar_Link_Item">
                <a href="crm.php">CRM</a>
            </div>
            <div class="Navbar_Link Navbar_Link_Item">
                <a href="pedidos.php">PEDIDOS</a>
            </div>
        </nav>
        <nav class="Navbar_Items_Right">
            <div class="Navbar_Link">
                <a href="crear_pedido.php">
                    <button>CREAR PEDIDO</button>
                </a>
            </div>
            <div class="Navbar_Link">
                <img class="profile" id="profile" src="img/Icons/profile1.svg" alt="profile" width="35px">
            </div>
        </nav>
    </div>
<?php elseif (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && ($_SESSION["type"] === 3 || $_SESSION["type"] === 4) ): ?>
<div class="Navbar">
    <div class="Navbar_Link Navbar_Link_Toggle">
        <img src="img/Icons/menu.svg" alt="menu" width="30px">
    </div>

    <div class="Navbar_Link Navbar_Link_Brand">
        <img src="img/logo-header.png" alt="logo">
    </div>

    <nav class="Navbar_Items">
        <div class="Navbar_Link Navbar_Link_Item padding-right-nav-link">
            <a href="pedidos.php">SEGUIMIENTO</a>
        </div>
    </nav>

    <nav class="Navbar_Items_Right">
        <div class="Navbar_Link">
            <img class="profile" id="profile" src="img/Icons/profile1.svg" alt="profile" width="35px">
        </div>
    </nav>
</div>
<?php endif; ?>