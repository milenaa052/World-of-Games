<?php
    $dadosApi = file_get_contents("http://localhost/Projetos/WorldOfGames/api/fotos.php");
    $dadosApi = json_decode($dadosApi);
?>

<section class="animate__animated animate__fadeInUp">
    <h1 class="text-center">Jogos em Destaque</h1>

    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="jogosHome">
                    <div class="flex">
                        <div class="descricao text-center">
                            <a href="html/jogo1.html">
                                <?php foreach ($dadosApi as $dados) {
                                    if ($dados->id == 2) {
                                        echo "<img src='{$dados->imagem}' alt='{$dados->nome}'>";
                                    };
                                } ?>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="jogosHome">
                    <div class="flex">
                        <div class="descricao text-center">
                            <a href="html/jogo2.html">
                                <img src="img/race-car.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="jogosHome">
                    <div class="flex">
                        <div class="descricao text-center">
                            <a href="html/jogo3.html">
                                <img src="img/call-of-duty.webp" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>
        <!--<div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>-->
    </div>
</section>

<section class="infoCards animate__animated animate__fadeInUp">
    <h1 class="text-center">Lançamentos</h1>

    <div class="cards d-flex justify-content-center gap-4">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/subway-surfers.webp" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8 card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn glow-on-hover pulse">Jogue Agora</a>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/subway-surfers.webp" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8 card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn glow-on-hover pulse">Jogue Agora</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ultimosCards">
    <h1 class="text-center">Você também pode gostar de:</h1>

    <div class="cards d-flex justify-content-center gap-5">
        <div class="card" style="width: 18rem;">
            <img src="img/gta.jpg" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-between">
            <h5 class="card-title align-content-center">GTA V</h5>
            <a href="#" class="btn glow-on-hover pulse">Jogue Agora</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="img/race-car.jpg" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-between">
            <h5 class="card-title align-content-center">Call of Duty</h5>
            <a href="#" class="btn glow-on-hover pulse">Jogue Agora</a>
            </div>
        </div>
    </div>
</section>