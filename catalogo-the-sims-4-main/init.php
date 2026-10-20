<?php

session_start();

if (!isset($_SESSION['infoSite'])) {
    $_SESSION['infoSite'] = [
        'nomeEmpresa' => 'Mundo Sims',
        'slogan' => 'Um Mundo de The Sims 4',
        'Telefone' => ['(11)989315891', '(11)5974669451'],
        'contatos' => [
            'email' => 'mundosims.4@gmail.com',
            'instagram' => 'mundo_sims',
            'whatsapp' => '(11)989315891'
        ]
    ];

    $_SESSION['usuarios'] = [
        'usuario1' => [
            'nome' => 'Eduarda',
            'email' => 'marquesduda856@gmail.com',
            'senha' => '1234'
        ]
    ];

    $_SESSION['produtos'] = [
        [
            'nome' => 'The Sims 4 - Completo', 
            'preco' => 3900.00, 
            'anolancado' => 2014, 
            'categoria' => "Completo",
            'imagem' => "img/the-sims-completo.png"
        ],
        [
            'nome' => 'Expansão - Ao Trabalho', 
            'preco' => 150.00, 
            'anolancado' => 2015, 
            'categoria' => "Expansão",
            'imagem' => "img/expancao-ao-trabalho.jpg"
        ],
        [
            'nome' => 'Expansão - Ilhas Tropicais', 
            'preco' => 150.00, 
            'anolancado' => 2019, 
            'categoria' => "Expansão",
            'imagem' => "img/expancao-ilhas-tropicais.jpg"
        ],
        [
            'nome' => 'Expansão - Trono e Glória', 
            'preco' => 150.00, 
            'anolancado' => 2026, 
            'categoria' => "Expansão",
            'imagem' => "img/expancao-trono-e-gloria.jpg"
        ],
        [
            'nome' => 'Expansão - Gatos e Cães', 
            'preco' => 149.00, 
            'anolancado' => 2018, 
            'categoria' => "Expansão",
            'imagem' => "img/expancao-gatos-e-caes.jpg"
        ],
        [
            'nome' => 'Expansão - A Aventura de Crescer', 
            'preco' => 149.00, 
            'anolancado' => 2023, 
            'categoria' => "Expansão",
            'imagem' => "img/expancao-a-aventura-de-crescer.jpg"
        ],
        [
            'nome' => 'Expansão - Estações', 
            'preco' => 149.00, 
            'anolancado' => 2018, 
            'categoria' => "Expansão",
            'imagem' => "img/expancao-estacoes.jpg"
        ],
        [
            'nome' => 'Expansão - Natureza Encantada', 
            'preco' => 149.00, 
            'anolancado' => 2025, 
            'categoria' => "Expansão",
            'imagem' => "img/expancao-natureza-encantada.jpg"
        ],
        [
            'nome' => 'Expansão - Pé na Cova', 
            'preco' => 149.00, 
            'anolancado' => 2024, 
            'categoria' => "Expansão",
            'imagem' => "img/expancao-pe-na-cova.jpg"
        ],
        [
            'nome' => 'Expansão - Vida Campestre', 
            'preco' => 149.00, 
            'anolancado' => 2021, 
            'categoria' => "Expansão",
            'imagem' => "img/expancao-vida-campestre.jpg"
        ],
        [
            'nome' => 'Pacote - Dia de Spa', 
            'preco' => 89.00, 
            'anolancado' => 2015, 
            'categoria' => "Pacote de Jogo",
            'imagem' => "img/pacote-dia-de-spa.jpg"
        ],
        [
            'nome' => 'Pacote - Histórias de Casamento', 
            'preco' => 89.00, 
            'anolancado' => 2022, 
            'categoria' => "Pacote de Jogo",
            'imagem' => "img/pacote-historias-de-casamento.jpg"
        ],
        [
            'nome' => 'Pacote - LobiSim', 
            'preco' => 89.00, 
            'anolancado' => 2022, 
            'categoria' => "Pacote de Jogo",
            'imagem' => "img/pacote-LobiSim.jpg"
        ],
        [
            'nome' => 'Pacote - Star Wars: Jornada para Batuu', 
            'preco' => 89.00, 
            'anolancado' => 2020, 
            'categoria' => "Pacote de Jogo",
            'imagem' => "img/pacote-star-wars.jpg"
        ],
        [
            'nome' => 'Pacote - Vampiros', 
            'preco' => 89.00, 
            'anolancado' => 2017, 
            'categoria' => "Pacote de Jogo",
            'imagem' => "img/pacote-vampiros.jpg"
        ],
        [
            'nome' => 'Coleção - Chef em Casa', 
            'preco' => 49.00, 
            'anolancado' => 2023, 
            'categoria' => "Coleção de Objetos",
            'imagem' => "img/colecao-chef-em-casa.jpg"
        ],
        [
            'nome' => 'Coleção - Criações Cristalinas', 
            'preco' => 49.00, 
            'anolancado' => 2024, 
            'categoria' => "Coleção de Objetos",
            'imagem' => "img/colecao-cristalinas.jpg"
        ],
        [
            'nome' => 'Coleção - Fitness', 
            'preco' => 49.00, 
            'anolancado' => 2019, 
            'categoria' => "Coleção de Objetos",
            'imagem' => "img/colecao-fitness.jpg"
        ],
        [
            'nome' => 'Coleção - Jardim Romântico', 
            'preco' => 49.00, 
            'anolancado' => 2016, 
            'categoria' => "Coleção de Objetos",
            'imagem' => "img/colecao-jardim-romantico.jpg"
        ],
        [
            'nome' => 'Coleção - Dia de Lavar as Roupas', 
            'preco' => 49.00, 
            'anolancado' => 2018, 
            'categoria' => "Coleção de Objetos",
            'imagem' => "img/colecao-lava.jpg"
        ]
    ];
}

?>
