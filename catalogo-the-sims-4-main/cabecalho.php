<?php
require_once("init.php");
echo "<link rel='stylesheet' href='css/cabecalho.css'>";

echo "<div class='logo-container'>";
    echo "<img src='img/plumbob.png' alt='Plumbob' class='logo-img'>";
    echo "<div class='logo-text'>";
        echo "<h1>" . htmlspecialchars($_SESSION['infoSite']['nomeEmpresa']) . "</h1>";
        echo "<h3>" . htmlspecialchars($_SESSION['infoSite']['slogan']) . "</h3>";
    echo "</div>";
echo "</div>";
?>
