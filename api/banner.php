<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $banner[1] = array(
        "id" => 1,
        "nome" => "Galactic Attack",
        "imagem" => "https://world-of-games-production.up.railway.app/img/banner-galactic-attack.jpg",
        "url" => "index.php?pg=jogo1"
    );
    $banner[2] = array(
        "id" => 2,
        "nome" => "Meowtopia",
        "imagem" => "http://world-of-games-production.up.railway.app/img/meawtopia.jpeg",
        "url"=> "index.php?pg=jogo2"
    );
    $banner[3] = array(
        "id" => 3,
        "nome" => "Snake Hungry",
        "imagem" => "https://world-of-games-production.up.railway.app/img/Snake.jpeg",
        "url"=> "index.php?pg=jogo3"
    );

    echo json_encode($banner);