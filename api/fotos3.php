<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $fotos[5] = array(
        "id" => 5,
        "nome" => "Felipe",
        "imagem" => "https://world-of-games-production.up.railway.app/img/Felipe.jpeg",
        "texto" => "Desenvolvedor do jogo Souls In The Dark"
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