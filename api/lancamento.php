<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $card1[1] = array(
        "id" => 1,
        "nome" => "Bird",
        "imagem" => "http://localhost/Projetos/WorldOfGames/img/banner-birdy.jpeg",
        "url" => "index.php?pg=jogo4",
        "descricao"=> "Junte-se a Birdy, o pássaro azul. Sua missão é voar habilidosamente entre os prédios da cidade, evitando os obstáculos.",
    );
    $card1[2] = array(
        "id" => 2,
        "nome" => "Subway Surfers",
        "imagem" => "http://localhost/Projetos/WorldOfGames/img/banner-birdy.jpeg",
        "url"=> "index.php?pg=jogo5",
        "descricao"=> "Junte-se a Birdy, o pássaro azul. Sua missão é voar habilidosamente entre os prédios da cidade, evitando os obstáculos.",
    );

    echo json_encode($card1);