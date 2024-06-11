<?php

    if(isset($_POST["submit"])) {

        include_once("config.php");

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $result = mysqli_query($conexao, 
            "INSERT INTO usuarios(nome, email, senha)
            VALUES('$nome', '$email', '$senha')

        ");
    }

?>

<section class="cadastro">
    <h1 class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">Cadastro</h1>

    <form action="index.php?pg=cadastro" method="POST" class="card d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
        <div class="campos mb-3 col-12 col-sm-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control fw-bold" id="nome" name="nome" placeholder="Digite o seu nome" required>
        </div>

        <div class="campos mb-3 col-12 col-sm-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control fw-bold" id="email" name="email" placeholder="email@gmail.com" required>
        </div>

        <div class="campos mb-3 col-12 col-sm-6">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control fw-bold" id="senha" name="senha" placeholder="Digite a sua senha" required>
        </div>

        <div class="col-12 col-md-6 d-flex justify-content-end gap-2">
            <span class="d-flex align-items-center">Já possui conta?</span>
            <a href="index.php?pg=login" class="link d-flex align-items-center">Faça Login</a>
            <button type="submit" name="submit" id="submit" class="btn">Cadastrar</button>
        </div>
    </form>
</section>