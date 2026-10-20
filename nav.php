<?php

require_once("init.php");

echo "<link rel='stylesheet' href='css/nav.css'>";

echo "<nav class='main-nav'>";

    if (isset($_SESSION['usuario_logado'])) {
        echo "<span class='user-name'>Olá, " . $_SESSION['usuario_logado']['nome'] . "!</span>";
        echo "<a href='index3.php' class='btn-nav-active'>Início</a>";
        echo "<a href='logout.php' class='nav-link-simple'>Sair</a>";
    } else {
        echo "<a href='index3.php' class='btn-nav-active'>Início</a>";
        echo "<a href='login.php' class='nav-link-simple'>Login 👤</a>";
    }

echo "</nav>";

?>