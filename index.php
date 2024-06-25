<?php
  session_start();
  $logado = isset($_SESSION['email']);

  if(isset($_GET['logout'])){
    session_destroy();
    header('location: index.php?pg=login');
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.jpeg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b3b83db5db.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/wickedcss.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">
    <title>World of Games</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
        <div class="container-fluid">
          <div class="perfil" data-aos="zoom-in" data-aos-duration="800" data-aos-easing="ease-in-sine">
            <a href="javascript:void(0);" onclick="<?php echo ($logado ? "window.location.href='index.php?pg=conta';" : "window.location.href='index.php?pg=login';"); ?>">
              <i class="fa-solid fa-circle-user"></i>
            </a>
          </div>

          <a class="navbar-brand shadow-none" href="index.php" data-aos="fade-right" 
          data-aos-duration="800" data-aos-easing="ease-in-sine">
            <img src="img/logo.jpeg" alt="World of Games">
          </a>

          <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" data-aos="fade-left" data-aos-duration="800" data-aos-easing="ease-in-sine">
            <i id="botao" class="fa-solid fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse text-center justify-content-end" id="navbarNav" data-aos="fade-left" data-aos-duration="800" data-aos-easing="ease-in-sine">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php?pg=home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?pg=quem-somos">Quem Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?pg=contato">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </header>

  <main class="container">
      <?php 
          $pg = $_GET["pg"] ?? "home";
          $pg = "paginas/{$pg}.php";

          if(file_exists($pg)) {
              include $pg;
          } else {
              include "paginas/erro.php";
          }
      ?> 
  </main>

    <footer id="contatos">
      <div class="logos">
          <a href="https://www.linkedin.com/in/milena-santos-de-oliveira-709816192/" target="_blank">
              <i class="fa-brands fa-linkedin"></i>
          </a>
          <a href="mailto:milenasantosdeoliveira40@gmail.com" target="_blank">
              <i class="fa-solid fa-envelope"></i>
          </a>
          <a href="https://github.com/milenaa052" target="_blank">
              <i class="fa-brands fa-github"></i>
          </a>
          <a href="https://api.whatsapp.com/send?phone=5544998301879&text=Ol%C3%A1%2C%20estava%20analisando%20seu%20portifólio%20e%20gostaria%20de%20entrar%20em%20contato." target="_blank">
              <i class="fa-brands fa-whatsapp"></i>
          </a>
      </div>

      <p class="copyright">© Copyright 2024 - Desenvolvido por <span>Milena Santos de Oliveira</span></p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>