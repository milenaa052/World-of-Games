<?php

    if(!isset($_SESSION['user_id'])){
        header('location: index.php?pg=login');
        exit;
    }
?>

<section class="jogos">
    <div class="cards d-flex flex-column align-items-center">
        <div class="card" style="max-width: 940px;">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <img src="./img/wild-west-the-infinite-battle.jpeg" class="img-fluid" alt="Wild West The Infinite Battle" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
                </div>
                <div class="col-sm-12 col-md-6 card-body d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
                    <h5 class="card-title fs-3">Wild West The Infinite Battle</h5>
                    <p class="card-text">Você deve navegar pelo deserto repleto de perigos. Sua missão é coletar todas as moedas de ouro, enquanto evita os zumbis do velho oeste. Após passar de fase, uma passagem secreta se abre, levando você ao Subterrâneo Secreto, ao encontrar o troféu, você ganha a habilidade de clicar no espaço para lançar bumerangues que podem derrotar o Goblin Guardião para vencer o jogo.</p>
                    <a href="./jogos/Wild West The Infinite Battle/index.html" target="_blank" class="col-sm-3 btn glow-on-hover pulse">Jogue Agora</a>
                </div>
            </div>
        </div>
    </div>
</section>