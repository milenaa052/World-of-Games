<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $card1[1] = array(
        "id" => 1,
        "nome" => "Bird",
        "imagem" => "https://world-of-games-production.up.railway.app/img/banner-birdy.jpeg",
        "url" => "jogo4",
        "descricao"=> "Junte-se a Birdy, o pássaro azul. Sua missão é voar habilidosamente entre os prédios da cidade, evitando os obstáculos.",
    );
    $card1[2] = array(
        "id" => 2,
        "nome" => "Arte da Ocultação",
        "imagem" => "https://world-of-games-production.up.railway.app/img/banner-arte-da-ocultacao.jpeg",
        "url"=> "jogo5",
        "descricao"=> "Você é um habilidoso shinobi, lutando contra hordas de esqueletos. Acumule pontos derrotando inimigos cada vez mais desafiadores.",
    );

    echo json_encode($card1);