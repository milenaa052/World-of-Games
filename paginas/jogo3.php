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
                    <img src="./img/Snake.jpeg" class="img-fluid" alt="Snake Hungry" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
                </div>
                <div class="col-sm-12 col-md-6 card-body d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
                    <h5 class="card-title fs-2">Snake Hungry</h5>
                    <p class="card-text">O classio jogo SNAKE, aonde seu principal objetivo é comer maçãs para aumentar seu tamanho e ficar cada vez mais rapido, dando uma dinamica unica, sensacional e muito classica.</p>
                    <a href="./jogos/Snake/index.html" target="_blank" class="col-sm-3 btn glow-on-hover pulse">Jogue Agora</a>
                </div>
            </div>
        </div>
    </div>
</section>