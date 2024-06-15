<?php
    $dadosBannerApi = file_get_contents("https://world-of-games-production.up.railway.app/api/banner.php");
    $dadosBannerApi = json_decode($dadosBannerApi);

    $dadosCard1Api = file_get_contents("https://world-of-games-production.up.railway.app/api/lancamento.php");
    $dadosCard1Api = json_decode($dadosCard1Api);

    $dadosCard2Api = file_get_contents("https://world-of-games-production.up.railway.app/api/sugestao.php");
    $dadosCard2Api = json_decode($dadosCard2Api);
?>

<section>
    <h1 class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
        Jogos em Destaque
    </h1>

    <div class="swiper" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="jogosHome">
                    <div class="flex">
                        <div class="descricao text-center">
                            <a href="index.php?pg=jogo1">
                                <img src="./img/banner-galactic-attack.jpg" alt="Galactic Attack">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="jogosHome">
                    <div class="flex">
                        <div class="descricao text-center">
                            <a href="index.php?pg=jogo2">
                                <img src="./img/banner-wild-west-the-infinite-battle.jpeg" alt="Galactic Attack">
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
    </div>
</section>

<section class="infoCards d-flex flex-column align-items-center">
    <h1 class="text-center">Lançamentos</h1>

    <div class="cards d-xl-flex justify-content-center gap-5">   
        <?php
            foreach ($dadosCard1Api as $dados) {
                ?>
                    <div class="card mb-5" style="max-width: 540px;" data-aos="fade-left" data-aos-duration="800" data-aos-easing="ease-in-sine">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?=$dados->imagem?>" class="img-fluid" alt="<?=$dados->nome?>">
                            </div>
                            <div class="col-md-8 card-body">
                                <h5 class="card-title"><?=$dados->nome?></h5>
                                <p class="card-text"><?=$dados->descricao?></p>
                                <a href="<?=$dados->url?>" class="btn glow-on-hover pulse">Jogue Agora</a>
                            </div>
                        </div>
                    </div>
                <?php
            }
        ?>    
    </div>
</section>

<section class="ultimosCards d-flex flex-column align-items-center">
    <h1 class="text-center">Você também pode gostar de:</h1>

    <div class="cards d-xl-flex justify-content-center gap-5">
        <?php
            foreach ($dadosCard2Api as $dados) {
                ?>
                    <div class="card mb-5" style="width: 18rem;" data-aos="fade-right" data-aos-duration="800" data-aos-easing="ease-in-sine">
                        <img src="<?=$dados->imagem?>" class="card-img-top" alt="<?=$dados->nome?>">
                        <div class="card-body d-flex justify-content-between">
                        <h5 class="card-title align-content-center"><?=$dados->nome?></h5>
                        <a href="<?=$dados->url?>" class="btn glow-on-hover pulse">Jogue Agora</a>
                        </div>
                    </div>
                <?php
            }
        ?>
    </div>
</section>