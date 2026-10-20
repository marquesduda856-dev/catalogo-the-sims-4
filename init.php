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
        ]
    ];
}

?>
