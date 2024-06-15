<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $banner[1] = array(
        "id" => 1,
        "nome" => "Galactic Attack",
        "imagem" => "https://world-of-games-production.up.railway.app/img/galacticAttack.jpg",
        "url" => "index.php?pg=jogo1"
    );
    $banner[2] = array(
        "id" => 2,
        "nome" => "GTA",
        "imagem" => "https://world-of-games-production.up.railway.app/img/gta.jpg",
        "url"=> "index.php?pg=jogo2"
    );
    $banner[3] = array(
        "id" => 3,
        "nome" => "Call of Duty",
        "imagem" => "https://world-of-games-production.up.railway.app/img/call-of-duty.webp",
        "url"=> "index.php?pg=jogo3"
    );

    echo json_encode($banner);