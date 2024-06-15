<?php
    $dadosFotos1Api = file_get_contents("https://world-of-games-production.up.railway.app/api/fotos1.php");
    $dadosFotos1Api = json_decode($dadosFotos1Api);

    $dadosFotos2Api = file_get_contents("https://world-of-games-production.up.railway.app/api/fotos2.php");
    $dadosFotos2Api = json_decode($dadosFotos2Api);

    $dadosFotos3Api = file_get_contents("https://world-of-games-production.up.railway.app/api/fotos3.php");
    $dadosFotos3Api = json_decode($dadosFotos3Api);
?>

<section class="desenvolvedores d-flex flex-column align-items-center">
  <h1 class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">Equipe de Desenvolvedores</h1>

  <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
    <?php
      foreach ($dadosFotos1Api as $dados) {
        ?>
          <div class="card mb-5" style="width: 18rem;">
            <img src="<?=$dados->imagem?>" class="card-img-top" alt="<?=$dados->nome?>">
            <div class="card-body text-center">
              <h5 class="card-title"><?=$dados->nome?></h5>
              <p><?=$dados->texto?></p>
            </div>
          </div>
        <?php
      }
    ?>
  </div>

  <div class="cards d-xl-flex justify-content-center gap-5">
    <?php
        foreach ($dadosFotos2Api as $dados) {
          ?>
            <div class="card mb-5" style="width: 18rem;">
              <img src="<?=$dados->imagem?>" class="card-img-top" alt="<?=$dados->nome?>">
              <div class="card-body text-center">
                <h5 class="card-title"><?=$dados->nome?></h5>
                <p><?=$dados->texto?></p>
              </div>
            </div>
          <?php
        }
      ?>
  </div>
  
  <div class="cards d-xl-flex justify-content-center gap-5" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
    <?php
      foreach ($dadosFotos3Api as $dados) {
        ?>
          <div class="card mb-5" style="width: 18rem;">
            <img src="<?=$dados->imagem?>" class="card-img-top" alt="<?=$dados->nome?>">
            <div class="card-body text-center">
              <h5 class="card-title"><?=$dados->nome?></h5>
              <p><?=$dados->texto?></p>
            </div>
          </div>
        <?php
      }
    ?>
  </div>
</section>