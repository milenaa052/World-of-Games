<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $fotos[2] = array(
        "id" => 2,
        "nome" => "João Paulo",
        "imagem" => "https://world-of-games-production.up.railway.app/img/JoaoPaulo.jpeg",
        "texto" => "Desenvolvedor do jogo Snake Hungry"
    );
    $fotos[3] = array(
        "id" => 3,
        "nome" => "Thiago",
        "imagem" => "https://world-of-games-production.up.railway.app/img/Thiago.jpeg",
        "texto" => "Desenvolvedor do jogo Arte da Ocultação"
    );
    $fotos[4] = array(
        "id" => 4,
        "nome" => "Alana",
        "imagem" => "https://world-of-games-production.up.railway.app/img/AlanaKovalski.jpeg",
        "texto"=> "Desenvolvedora do jogo Meowtopia"
    );

    echo json_encode($fotos);