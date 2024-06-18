<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $card2[1] = array(
        "id" => 1,
        "nome" => "Souls in the dark",
        "imagem" => "https://world-of-games-production.up.railway.app/img/banner-wild-west-the-infinite-battle.jpeg",
        "url" => "index.php?pg=jogo6",
    );
    $card2[2] = array(
        "id" => 2,
        "nome" => "Submarine Adventure",
        "imagem" => "https://world-of-games-production.up.railway.app/img/banner-submarine-adventure.jpeg",
        "url"=> "index.php?pg=jogo7",
    );

    echo json_encode($card2);