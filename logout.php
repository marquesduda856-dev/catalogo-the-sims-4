<?php

require_once('init.php');

unset($_SESSION['usuario_logado']);

header('Location: login.php');
exit;

?>