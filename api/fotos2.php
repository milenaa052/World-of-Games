<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $fotos[2] = array(
        "id" => 2,
        "nome" => "Paulo",
        "imagem" => "https://world-of-games-production.up.railway.app/img/paulo.JPG",
        "texto" => "Desenvolvedor do jogo Bird"
    );
    $fotos[3] = array(
        "id" => 3,
        "nome" => "Amo minha namorada",
        "imagem" => "https://world-of-games-production.up.railway.app/img/anita.jpg",
        "texto" => "Sou pau mandada da minha mulher"
    );
    $fotos[4] = array(
        "id" => 4,
        "nome" => "Que não sei oq",
        "imagem" => "https://world-of-games-production.up.railway.app/img/anita.jpg",
        "texto"=> "não sei oq lá não sei oq lá"
    );

    echo json_encode($fotos);