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
                    <img src="./img/arte-da-ocultacao.jpeg" class="img-fluid" alt="Arte da Ocultação" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
                </div>
                <div class="col-sm-12 col-md-6 card-body d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
                    <h5 class="card-title fs-2">Arte da Ocultação</h5>
                    <p class="card-text">Você é um habilidoso shinobi em um jogo 2D, lutando contra hordas de esqueletos clicando na tecla "X". Acumule pontos derrotando inimigos cada vez mais desafiadores. Alcance a pontuação final para vencer e trazer paz ao mundo assombrado.</p>
                    <a href="./jogos/Arte da Ocultação/index.html" target="_blank" class="col-sm-3 btn glow-on-hover pulse">Jogue Agora</a>
                    <p class="mensagemErro">Infelizmente este jogo não está disponível para dispositivos móveis!</p>
                </div>
            </div>
        </div>
    </div>
</section>