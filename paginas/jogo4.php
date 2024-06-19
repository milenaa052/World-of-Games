<?php

    if(!isset($_SESSION['user_id'])){
        echo '<script type="text/javascript">';
        echo 'window.location.href="index.php?pg=login";';
        echo '</script>';
        exit;
    }
?>

<section class="jogos">
    <div class="cards d-flex flex-column align-items-center">
        <div class="card" style="max-width: 940px;">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <img src="./img/birdy.jpeg" class="img-fluid" alt="Bird" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
                </div>
                <div class="col-sm-12 col-md-6 card-body d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
                    <h5 class="card-title fs-2">Bird</h5>
                    <p class="card-text">Junte-se a Birdy em sua jornada épica pelos céus coloridos do entardecer! Neste jogo cativante, você controla Birdy, o pássaro azul escuro, com cliques simples do botão esquerdo do mouse ou a tecla espaço do teclado. Sua missão é voar habilidosamente entre os prédios da cidade, evitando obstáculos que surgem no caminho.</p>
                    <a href="./jogos/birdy/index.html" target="_blank" class="col-sm-3 btn glow-on-hover pulse">Jogue Agora</a>
                </div>
            </div>
        </div>
    </div>
</section>