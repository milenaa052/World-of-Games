<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $fotos[5] = array(
        "id" => 5,
        "nome" => "Amanda é a minha dona",
        "imagem" => "https://world-of-games-production.up.railway.app/img/anita.jpg",
        "texto" => "sou viadona na minha mulher"
    );
    $fotos[6] = array(
        "id" => 5,
        "nome" => "não sei oq lá",
        "imagem" => "https://world-of-games-production.up.railway.app/img/anita.jpg",
        "texto"=> "que não sei oq lá"
    );
    $fotos[7] = array(
        "id" => 5,
        "nome" => "amo minha mulher",
        "imagem" => "https://world-of-games-production.up.railway.app/img/anita.jpg",
        "texto"=> "propriedade privada da Amanda"
    );

    echo json_encode($fotos);