<?php
    $dadosApi = file_get_contents("http://localhost/Projetos/WorldOfGames/api/fotos.php");
    $dadosApi = json_decode($dadosApi);
?>

<section class="desenvolvedores">
  <h1 class="text-center">Equipe de Desenvolvedores</h1>

  <div class="d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
      <?php foreach ($dadosApi as $dados) {
        if ($dados->id == 5) {
          echo "<img src='{$dados->imagem}' alt='{$dados->nome}' class='card-img-top'>";
        };
      } ?>
      <div class="card-body text-center">
        <h5 class="card-title">Milena Santos de Oliveira</h5>
        <p>Desenvolvedora do site World of Games e do jogo Galactic Attack</p>
      </div>
    </div>
  </div>

  <div class="cards d-flex justify-content-center gap-5">
    <div class="card" style="width: 18rem;">
      <?php foreach ($dadosApi as $dados) {
        if ($dados->id == 5) {
          echo "<img src='{$dados->imagem}' alt='{$dados->nome}' class='card-img-top'>";
        };
      } ?>
      <div class="card-body text-center">
        <h5 class="card-title">Não sei o que</h5>
        <p>não sei o que lá</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <?php foreach ($dadosApi as $dados) {
        if ($dados->id == 5) {
          echo "<img src='{$dados->imagem}' alt='{$dados->nome}' class='card-img-top'>";
        };
      } ?>
      <div class="card-body text-center">
        <h5 class="card-title">Amo minha namorada</h5>
        <p>Sou pau mandada da minha mulher</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <?php foreach ($dadosApi as $dados) {
        if ($dados->id == 5) {
          echo "<img src='{$dados->imagem}' alt='{$dados->nome}' class='card-img-top'>";
        };
      } ?>
      <div class="card-body text-center">
        <h5 class="card-title">Que não sei oq</h5>
        <p>não sei oq lá não sei oq lá</p>
      </div>
    </div>
  </div>
  
  <div class="cards d-flex justify-content-center gap-5">
    <div class="card" style="width: 18rem;">
      <?php foreach ($dadosApi as $dados) {
        if ($dados->id == 5) {
          echo "<img src='{$dados->imagem}' alt='{$dados->nome}' class='card-img-top'>";
        };
      } ?>
      <div class="card-body text-center">
        <h5 class="card-title">Amanda é a minha dona</h5>
        <p>sou viadona na minha mulher</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <?php foreach ($dadosApi as $dados) {
        if ($dados->id == 5) {
          echo "<img src='{$dados->imagem}' alt='{$dados->nome}' class='card-img-top'>";
        };
      } ?>
      <div class="card-body text-center">
        <h5 class="card-title">não oq lá</h5>
        <p>que não sei oq lá</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <?php foreach ($dadosApi as $dados) {
        if ($dados->id == 5) {
          echo "<img src='{$dados->imagem}' alt='{$dados->nome}' class='card-img-top'>";
        };
      } ?>
      <div class="card-body text-center">
        <h5 class="card-title">amo minha mulher</h5>
        <p>propriedade privada da Amanda</p>
      </div>
    </div>
  </div>
  
</section>