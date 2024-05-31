<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $fotos[1] = array(
        "id" => 1,
        "nome" => "Call of Duty",
        "imagem"=> "http://localhost/Projetos/WorldOfGames/img/call-of-duty.webp"
    );
    $fotos[2] = array(
        "id" => 2,
        "nome" => "GTA",
        "imagem" => "http://localhost/Projetos/WorldOfGames/img/gta.jpg"
    );
    $fotos[3] = array(
        "id" => 3,
        "nome" => "Race Car",
        "imagem" => "http://localhost/Projetos/WorldOfGames/img/race-car.jpg"
    );
    $fotos[4] = array(
        "id" => 4,
        "nome" => "Subway Surfers",
        "imagem" => "http://localhost/Projetos/WorldOfGames/img/subway-surfers.webp"
    );
    $fotos[5] = array(
        "id" => 5,
        "nome" => "pennywise",
        "imagem" => "http://localhost/Projetos/WorldOfGames/img/anita.jpg"
    );

    echo json_encode($fotos);