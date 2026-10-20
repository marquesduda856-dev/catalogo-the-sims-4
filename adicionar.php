<?php
require_once('init.php');

if (!isset($_SESSION['usuario_logado'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $caminhoImagem = 'img/plumbob.png';

    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        $nomeArquivo = basename($_FILES['imagem']['name']);
        $destino = 'img/' . $nomeArquivo;

        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $destino)) {
            $caminhoImagem = $destino;
        }
    }

    $novoProduto = [
        'nome'       => $_POST['nome'],
        'preco'      => (float)$_POST['preco'],
        'anolancado' => $_POST['anolancado'],
        'categoria'  => $_POST['categoria'],
        'imagem'     => $caminhoImagem
    ];

    $_SESSION['produtos'][] = $novoProduto;
    header('Location: index3.php');
    exit;
}

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
    echo "<title>Adicionar Produto - Mundo Sims</title>";
    echo "<link rel='stylesheet' href='css/index.css'>";
    echo "<link rel='stylesheet' href='css/adicionar.css'>";
echo "</head>";

echo "<body>";

    echo "<header class='top-bar'>";
        require_once('cabecalho.php');
        require_once('nav.php');
    echo "</header>";

    echo "<main class='form-page'>";
        echo "<div class='form-card'>";
            echo "<h2 class='form-title'><span class='plumbob-icon'>♦</span> Adicionar Novo Produto</h2>";

            echo "<form method='POST' action='adicionar.php' enctype='multipart/form-data'>";

                echo "<div class='form-group'>";
                    echo "<label for='nome'>Nome do Produto:</label>";
                    echo "<input type='text' id='nome' name='nome' placeholder='Ex: Expansão - Vida no Campo' required>";
                echo "</div>";

                echo "<div class='form-group'>";
                    echo "<label for='preco'>Preço (R$):</label>";
                    echo "<input type='number' step='0.01' id='preco' name='preco' placeholder='Ex: 150.00' required>";
                echo "</div>";

                echo "<div class='form-group'>";
                    echo "<label for='anolancado'>Ano de Lançamento:</label>";
                    echo "<input type='number' id='anolancado' name='anolancado' placeholder='Ex: 2021' required>";
                echo "</div>";

                echo "<div class='form-group'>";
                    echo "<label for='categoria'>Categoria:</label>";
                    echo "<input type='text' id='categoria' name='categoria' placeholder='Ex: Expansão' required>";
                echo "</div>";

                echo "<div class='form-group'>";
                    echo "<label for='imagem'>Imagem do Produto:</label>";
                    echo "<input type='file' id='imagem' name='imagem' accept='image/*'>";
                echo "</div>";

                echo "<div class='form-actions'>";
                    echo "<button type='submit' class='btn-submit'>Cadastrar Produto</button>";
                echo "</div>";

            echo "</form>";
        echo "</div>";
    echo "</main>";

    require_once('rodape.php');

echo "</body>";
echo "</html>";
?>