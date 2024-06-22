<section class="contato">
    <h1 class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">Contato</h1>

    <div class="selecao d-flex flex-wrap flex-row justify-content-center">
        <p class="text-white fs-5" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">Entre em contato com:</p>

        <select class="form-select w-75 mb-5 fw-bold" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
            <option value="1">Milena</option>
            <option value="2">João Paulo</option>
            <option value="3">Thiago</option>
            <option value="4">Alana</option>
            <option value="5">Paulo</option>
            <option value="6">Rodrigo</option>
            <option value="7">Patrick</option>
        </select>
    </div>

    <form action="index.php?pg=envioEmail" method="POST" class="card d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
        <div class="campos mb-3 col-6 w-100">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control fw-bold" id="nome" name="nome" placeholder="Digite o seu nome" required>
        </div>

        <div class="campos mb-3 col-6 w-100">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control fw-bold" id="email" name="email" placeholder="email@gmail.com" required>
        </div>

        <div class="campos mb-3 col-6 w-100">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea class="form-control fw-bold" id="mensagem" name="mensagem" rows="3" placeholder="Digite a sua mensagem" required></textarea>
        </div>

        <div class="col-12 col-md-6">
            <button type="submit" class="btn">Enviar</button>
        </div>
    </form>
</section>