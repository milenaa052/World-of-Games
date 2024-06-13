<?php /*

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: index.php?pg=login');
    }*/
?>

<section class="jogos">
    <div class="cards d-flex flex-column align-items-center">
        <div class="card" style="max-width: 940px;">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <img src="./img/galacticAttack.jpg" class="img-fluid" alt="Galactic Attack" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
                </div>
                <div class="col-sm-12 col-md-6 card-body d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
                    <h5 class="card-title fs-2">Galactic Attack</h5>
                    <p class="card-text">A terra está sob ameaça por membros de outros planetas devido a um conflito galático, proteja a Terra em sua nave XL7 de ataques e derrote o vilão Etron para que ele não destrua a sua casa.</p>
                    <a href="./jogos/Galactic Attack/index.html" target="_blank" class="col-sm-3 btn glow-on-hover pulse">Jogue Agora</a>
                </div>
            </div>
        </div>
    </div>
</section>