<?php
require_once('init.php');
echo "<link rel='stylesheet' href='css/login.css'>";

$erro = "";

if (isset($_SESSION['usuario_logado'])) {
    header('Location: index3.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $usuarioEncontrado = false;

    foreach ($_SESSION['usuarios'] as $usuario) {
        if ($usuario['email'] === $email && (string)$usuario['senha'] === (string)$senha) {
            $_SESSION['usuario_logado'] = $usuario;
            $usuarioEncontrado = true;
            header('Location: index3.php');
            exit;
        }
    }

    if (!$usuarioEncontrado) {
        $erro = "E-mail ou senha incorretos!";
    }
}

echo "<html>";
echo "<head>";
    echo "<title>Login - Mundo Sims</title>";
    echo "<link rel='stylesheet' href='css/index.css'>";
echo "</head>";

echo "<body>";

    echo "<header class='top-bar'>";
        require_once('cabecalho.php');
        require_once('nav.php');
    echo "</header>";

    echo "<main class='form-page'>";
        echo "<div class='form-card'>";
            echo "<h2 class='form-title'><span class='plumbob-icon'>♦</span> Login do Administrador</h2>";

            if (!empty($erro)) {
                echo "<div class='error-msg'>$erro</div>";
            }

            echo "<form method='POST' action='login.php'>";

                echo "<div class='form-group'>";
                    echo "<label for='email'>E-mail:</label>";
                    echo "<input type='email' id='email' name='email' placeholder='Digite o seu e-mail' required>";
                echo "</div>";

                echo "<div class='form-group'>";
                    echo "<label for='senha'>Senha:</label>";
                    echo "<input type='password' id='senha' name='senha' placeholder='Digite a sua senha' required>";
                echo "</div>";

                echo "<div class='form-actions'>";
                    echo "<button type='submit' class='btn-submit'>Entrar</button>";
                echo "</div>";

            echo "</form>";
        echo "</div>";
    echo "</main>";

    require_once('rodape.php');

echo "</body>";
echo "</html>";
?>