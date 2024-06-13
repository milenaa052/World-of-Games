<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $card2[1] = array(
        "id" => 1,
        "nome" => "Souls in the dark",
        "imagem" => "http://localhost/Projetos/WorldOfGames/img/banner-souls-in-the-dark.jpeg",
        "url" => "index.php?pg=jogo6",
    );
    $card2[2] = array(
        "id" => 2,
        "nome" => "Submarine Adventure",
        "imagem" => "http://localhost/Projetos/WorldOfGames/img/banner-souls-in-the-dark.jpeg",
        "url"=> "index.php?pg=jogo7",
    );

    echo json_encode($card2);