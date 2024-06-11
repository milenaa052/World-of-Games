<section class="cadastro">
    <h1 class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">Login</h1>

    <form action="index.php?pg=verificaLogin" method="POST" class="card d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
        <div class="campos mb-3 col-12 col-sm-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control fw-bold" id="email" name="email" placeholder="email@gmail.com" required>
        </div>

        <div class="campos mb-3 col-12 col-sm-6">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control fw-bold" id="senha" name="senha" placeholder="Digite a sua senha" required>
        </div>

        <div class="col-12 col-md-6 d-flex justify-content-end gap-2 flex-wrap">
            <span class="d-flex align-items-center">Não possui conta?</span>
            <a href="index.php?pg=cadastro" class="link d-flex align-items-center">Criar conta</a>
            <button type="submit" name="submit" value="Enviar" class="btn">Entrar</button>
        </div>
    </form>
</section>