<?php
require_once("init.php");

echo "<!DOCTYPE html>";
echo "<html>";

echo "<head>";
    echo "<title>Início - Mundo Sims</title>";
    echo "<link rel='stylesheet' href='css/index.css'>";
echo "</head>";

echo "<body>";

echo "<header class='top-bar'>";
    require_once('cabecalho.php');
    require_once('nav.php');
echo "</header>";

echo "<section class='hero-banner'>";
    echo "<div class='hero-content'>";
        echo "<h2 class='hero-title'>SEU MUNDO.<br>SUAS REGRAS.</h2>";
        echo "<p class='hero-subtitle'>CONTEÚDOS PARA DEIXAR SEUS SIMS AINDA MAIS INCRÍVEIS!</p>";
    echo "</div>";
echo "</section>";

echo "<main id='catalogo'>";
    echo "<div class='catalog-header'>";
        echo "<h2 class='section-title'><span class='plumbob-icon'>⧫</span> Catálogo de Produtos</h2>";
        if (isset($_SESSION['usuario_logado'])) {
            echo "<a href='adicionar.php' class='btn-add-product'>+ Adicionar Produto</a>";
        }
    echo "</div>";

    echo "<div class='products-grid'>";
        if (isset($_SESSION['produtos']) && is_array($_SESSION['produtos'])) {
            foreach ($_SESSION['produtos'] as $id => $produto) {
                $imgSrc = !empty($produto['imagem']) ? $produto['imagem'] : 'img/plumbob.png';
                $precoFormatado = number_format((float)$produto['preco'], 2, ',', '.');
                $categoria = mb_strtoupper($produto['categoria']);

                echo "<div class='product-card'>";
                    echo "<div class='card-img-container'>";
                        echo "<img src='" . $imgSrc . "' alt='" . $produto['nome'] . "' class='product-img'>";
                    echo "</div>";
                    echo "<div class='card-body'>";
                        echo "<span class='category-badge'>" . $categoria . "</span>";
                        echo "<h3 class='product-title'>" . $produto['nome'] . "</h3>";
                        echo "<div class='product-price'>R$ " . $precoFormatado . "</div>";

                        if (isset($_SESSION['usuario_logado'])) {
                            echo "<div class='admin-actions'>";
                                echo "<a href='editar.php?id=$id' class='btn-admin-edit'>Editar</a>";
                                echo "<a href='excluir.php?id=$id' class='btn-admin-delete'>Excluir</a>";
                            echo "</div>";
                        }
                    echo "</div>";
                echo "</div>";
            }
        }
    echo "</div>";

    echo "<section class='about-section'>";
        echo "<div class='about-content'>";
            echo "<h3><span class='plumbob-icon'>⧫</span> Sobre o Mundo Sims</h3>";
            echo "<p>Um espaço dedicado aos jogadores de The Sims 4. Aqui você encontra os melhores conteúdos para seu jogo!</p>";
        echo "</div>";
    echo "</section>";

echo "</main>";

require_once('rodape.php');

echo "</body>";
echo "</html>";
?>