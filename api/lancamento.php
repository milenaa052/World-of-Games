<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $card1[1] = array(
        "id" => 1,
        "nome" => "Bird",
        "imagem" => "http://localhost/Projetos/WorldOfGames/img/birdy.jpeg",
        "url" => "index.php?pg=jogo4",
        "descricao"=> "Junte-se a Birdy, o pássaro azul. Sua missão é voar habilidosamente entre os prédios da cidade, evitando os obstáculos.",
    );
    $card1[2] = array(
        "id" => 2,
        "nome" => "Subway Surfers",
        "imagem" => "http://localhost/Projetos/WorldOfGames/img/subway-surfers.webp",
        "url"=> "index.php?pg=jogo5",
        "descricao"=> "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
    );

    echo json_encode($card1);