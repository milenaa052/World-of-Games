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
                    <img src="./img/submarine-adventure.jpeg" class="img-fluid" alt="Souls in the dark" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
                </div>
                <div class="col-sm-12 col-md-6 card-body d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
                    <h5 class="card-title fs-2">Submarine Adventure</h5>
                    <p class="card-text">Em Submarine Adventure, o bravo submarino explorador, conhecido como Subby, embarca em uma jornada épica para encontrar o lendário tesouro perdido nas profundezas do oceano. No entanto, para chegar ao tesouro, Subby deve enfrentar desafios perigosos pelo caminho. Nadando através de recifes de coral, esquivando-se de cardumes de peixes coloridos e escapando de criaturas marinhas assustadoras, como tubarões famintos e águas-vivas venenosas, Subby avança corajosamente, determinado a alcançar seu objetivo.</p>
                    <a href="./jogos/Submarine Adventure/index.html" target="_blank" class="col-sm-3 btn glow-on-hover pulse">Jogue Agora</a>
                    <p class="mensagemErro">Infelizmente este jogo não está disponível para dispositivos móveis!</p>
                </div>
            </div>
        </div>
    </div>
</section>