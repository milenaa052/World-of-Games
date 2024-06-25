<?php

    if(!isset($_SESSION['user_id'])){
        echo '<script type="text/javascript">';
        echo 'window.location.href="login";';
        echo '</script>';
        exit;
    }
?>

<section class="jogos">
    <div class="cards d-flex flex-column align-items-center">
        <div class="card" style="max-width: 940px;">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <img src="./img/meowtopia.jpeg" class="img-fluid" alt="Meowtopia" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
                </div>
                <div class="col-sm-12 col-md-6 card-body d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
                    <h5 class="card-title fs-3">Meowtopia</h5>
                    <p class="card-text">Em Meowtopia, os jogadores assumem o controle de Buggy, enquanto ele se aventura numa missão para encontrar sua amiga desaparecida, Lily. Com gráficos Pixel Art, explore 3 fases desvendando as pistas deixadas para trás, enquanto Buggy mergulha cada vez mais fundo na investigação, com um detetive que parece ter seus próprios segredos.</p>
                    <a href="./jogos/meowtopia/fase1/index.html" target="_blank" class="col-sm-3 btn glow-on-hover pulse">Jogue Agora</a>
                    <p class="mensagemErro">Infelizmente este jogo não está disponível para dispositivos móveis!</p>
                </div>
            </div>
        </div>
    </div>
</section>