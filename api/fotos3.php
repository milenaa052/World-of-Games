<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $fotos[5] = array(
        "id" => 5,
        "nome" => "Paulo",
        "imagem" => "https://world-of-games-production.up.railway.app/img/paulo.JPG",
        "texto" => "Desenvolvedor do jogo Bird"
    );
    $fotos[6] = array(
        "id" => 5,
        "nome" => "Rodrigo",
        "imagem" => "https://world-of-games-production.up.railway.app/img/Rodrigo.png",
        "texto"=> "Desenvolvedor do jogo Submarine Adventure"
    );
    $fotos[7] = array(
        "id" => 5,
        "nome" => "Patrick",
        "imagem" => "https://world-of-games-production.up.railway.app/img/Patrick.jpeg",
        "texto"=> "Desenvolvedor do jogo Wild West The Infinite Battle"
    );

    echo json_encode($fotos);