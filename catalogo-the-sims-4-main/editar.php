<?php
require_once('init.php');

if (!isset($_SESSION['usuario_logado'])) {
    header('Location: login.php');
    exit;
}

$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id === null || !isset($_SESSION['produtos'][$id])) {
    header('Location: index3.php');
    exit;
}

$produto = $_SESSION['produtos'][$id];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $caminhoImagem = $produto['imagem'] ?? 'img/plumbob.png';

    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        $nomeArquivo = basename($_FILES['imagem']['name']);
        $destino = 'img/' . $nomeArquivo;

        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $destino)) {
            $caminhoImagem = $destino;
        }
    }

    $_SESSION['produtos'][$id] = [
        'nome'       => $_POST['nome'],
        'preco'      => (float)$_POST['preco'],
        'anolancado' => $_POST['anolancado'],
        'categoria'  => $_POST['categoria'],
        'imagem'     => $caminhoImagem
    ];

    header('Location: index3.php');
    exit;
}

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
    echo "<title>Editar Produto - Mundo Sims</title>";
    echo "<link rel='stylesheet' href='css/index.css'>";
    echo "<link rel='stylesheet' href='css/editar.css'>";
echo "</head>";

echo "<body>";

    echo "<header class='top-bar'>";
        require_once('cabecalho.php');
        require_once('nav.php');
    echo "</header>";

    echo "<main class='form-page'>";
        echo "<div class='form-card'>";
            echo "<h2 class='form-title'><span class='plumbob-icon'>♦</span> Editar Produto #$id</h2>";

            echo "<form method='POST' action='editar.php?id=$id' enctype='multipart/form-data'>";

                echo "<div class='form-group'>";
                    echo "<label for='nome'>Nome do Produto:</label>";
                    echo "<input type='text' id='nome' name='nome' value='" . $produto['nome'] . "' required>";
                echo "</div>";

                echo "<div class='form-group'>";
                    echo "<label for='preco'>Preço (R$):</label>";
                    echo "<input type='number' step='0.01' id='preco' name='preco' value='" . $produto['preco'] . "' required>";
                echo "</div>";

                echo "<div class='form-group'>";
                    echo "<label for='anolancado'>Ano de Lançamento:</label>";
                    echo "<input type='number' id='anolancado' name='anolancado' value='" . $produto['anolancado'] . "' required>";
                echo "</div>";

                echo "<div class='form-group'>";
                    echo "<label for='categoria'>Categoria:</label>";
                    echo "<input type='text' id='categoria' name='categoria' value='" . $produto['categoria'] . "' required>";
                echo "</div>";

                echo "<div class='form-group'>";
                    echo "<label>Imagem Atual:</label><br>";
                    $imgAtual = !empty($produto['imagem']) ? $produto['imagem'] : 'img/plumbob.png';
                    echo "<img src='" . $imgAtual . "' alt='Imagem do produto' style='width:90px; height:90px; object-fit:cover; border-radius:6px; margin: 8px 0;'><br>";
                    echo "<label for='imagem'>Trocar Imagem (opcional):</label>";
                    echo "<input type='file' id='imagem' name='imagem' accept='image/*'>";
                echo "</div>";

                echo "<div class='form-actions'>";
                    echo "<button type='submit' class='btn-submit'>Salvar Alterações</button>";
                echo "</div>";

            echo "</form>";
        echo "</div>";
    echo "</main>";

    require_once('rodape.php');

echo "</body>";
echo "</html>";
?>