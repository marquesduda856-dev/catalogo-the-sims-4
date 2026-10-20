<?php
require_once("init.php");
echo "<link rel='stylesheet' href='css/rodape.css'>";

$email       = $_SESSION['infoSite']['email'] ?? 'mundosims.4@gmail.com';
$instagram   = $_SESSION['infoSite']['instagram'] ?? 'mundo_sims';
$whatsapp    = $_SESSION['infoSite']['whatsapp'] ?? '(11)989315891';
$nomeEmpresa = $_SESSION['infoSite']['nomeEmpresa'] ?? 'Mundo Sims';
$slogan      = $_SESSION['infoSite']['slogan'] ?? 'Um Mundo de The Sims 4';

echo "<footer class='footer-bar'>";

    echo "<div class='footer-logo-container'>";
        echo "<img src='img/plumbob.png' alt='Plumbob' class='footer-logo-img'>";
        echo "<div class='footer-logo-text'>";
            echo "<h2>" . $nomeEmpresa . "</h2>";
            echo "<p>" . $slogan . "</p>";
        echo "</div>";
    echo "</div>";

    echo "<div class='footer-contacts'>";

        echo "<a href='https://instagram.com/" . $instagram . "' target='_blank' class='footer-contact-item'>";
            echo "<svg class='footer-icon' viewBox='0 0 24 24'>";
                echo "<rect x='2' y='2' width='20' height='20' rx='5' ry='5'></rect>";
                echo "<path d='M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z'></path>";
                echo "<line x1='17.5' y1='6.5' x2='17.51' y2='6.5'></line>";
            echo "</svg>";
            echo "<span>" . $instagram . "</span>";
        echo "</a>";

        echo "<a href='https://wa.me/5511989315891' target='_blank' class='footer-contact-item'>";
            echo "<svg class='footer-icon' viewBox='0 0 24 24'>";
                echo "<path d='M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z'></path>";
            echo "</svg>";
            echo "<span>" . $whatsapp . "</span>";
        echo "</a>";

        echo "<a href='mailto:" . $email . "' class='footer-contact-item'>";
            echo "<svg class='footer-icon' viewBox='0 0 24 24'>";
                echo "<path d='M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z'></path>";
                echo "<polyline points='22,6 12,13 2,6'></polyline>";
            echo "</svg>";
            echo "<span>" . $email . "</span>";
        echo "</a>";

    echo "</div>";

echo "</footer>";
?>