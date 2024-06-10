<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $card2[1] = array(
        "id" => 1,
        "nome" => "GTA",
        "imagem" => "http://localhost/Projetos/WorldOfGames/img/gta.jpg",
        "url" => "index.php?pg=jogo6",
    );
    $card2[2] = array(
        "id" => 2,
        "nome" => "Race Car",
        "imagem" => "http://localhost/Projetos/WorldOfGames/img/race-car.jpg",
        "url"=> "index.php?pg=jogo7",
    );

    echo json_encode($card2);