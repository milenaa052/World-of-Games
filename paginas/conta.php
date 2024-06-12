<?php

    include 'config.php';
    $user_id = $_SESSION['user_id'];

    if(!isset($user_id)){
        header('location: index.php?pg=login');
    };

    if(isset($_GET['logout'])){
        unset($user_id);
        session_destroy();
        header('location: index.php?pg=login');
    }

?>

<section class="conta">
    <div class="w-100 d-flex flex-column justify-content-center">
        <form action="" enctype="multipart/form-data" class="perfil d-flex flex-column justify-content-center align-items-center">
      
            <div class="image-upload">
                <?php
                    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
                    if(mysqli_num_rows($select) > 0){
                        $fetch = mysqli_fetch_assoc($select);
                    }
                    if($fetch['image'] == ''){
                        echo '<img src="./img/user.png">';
                    }else{
                        echo '<img src="./img/uploaded_img/'.$fetch['image'].'">';
                    }
                ?>
            </div>
            
            <div class="campos mb-3 col-sm-6 col-xl-4">
                <input type="file" id="imagem" name="image" accept="image/jpg, image/jpeg, image/png" class="w-100">
            </div>
        
            <p class="text-white mt-5 col-6">Olá, <?php echo $fetch['name']; ?></p>

            <div class="campos mb-3 col-12 col-sm-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control fw-bold" id="nome" name="nome" placeholder="Digite o seu nome" required>
            </div>
            <div class="campos mb-3 col-12 col-sm-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control fw-bold" id="email" name="email" placeholder="Digite o seu nome" required>
            </div>
            <div class="campos mb-3 col-12 col-sm-6">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control fw-bold" id="senha" name="senha" placeholder="Digite o seu nome" required>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-end gap-4 flex-wrap">
                <a href="index.php?logout=<?php echo $user_id; ?>" class="sair d-flex flex-row align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span class="span d-flex align-items-center">Sair</span>
                </a>
                <button type="submit" name="submit" value="Enviar" class="btn">Salvar</button>
            </div>
        </form>
    </div>
</section>