<?php

require_once('init.php');

if (!isset($_SESSION['usuario_logado'])) {
    header('Locations: login.php');
    exit;
}

$id = $_GET['id'] ?? null;

if ($id !== null && isset($_SESSION['produtos'][$id])) {
    unset($_SESSION['produtos'][$id]);
}

header('Location: index3.php');
exit;

?>