<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $fotos[1] = array(
        "id" => 1,
        "nome" => "Milena",
        "imagem" => "https://world-of-games-production.up.railway.app/img/milena.jpeg",
        "texto" => "Desenvolvedora do site World of Games e do jogo Galactic Attack"
    );

    echo json_encode($fotos);