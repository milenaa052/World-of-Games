<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $fotos[1] = array(
        "id" => 1,
        "nome" => "Milena Santos de Oliveira",
        "imagem" => "http://localhost/Projetos/WorldOfGames/img/milena.jpeg",
        "texto" => "Desenvolvedora do site World of Games e do jogo Galactic Attack"
    );

    echo json_encode($fotos);