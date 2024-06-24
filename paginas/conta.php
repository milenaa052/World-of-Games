<?php
    $logado = isset($_SESSION['email']);

    include 'conn.php';
    $user_id = $_SESSION['user_id'];

    if(!isset($user_id)){
        echo '<script type="text/javascript">';
        echo 'window.location.href="index.php?pg=login";';
        echo '</script>';
        exit;
    };
?>

<section class="conta">
    <div class="w-100 d-flex flex-column justify-content-center">
        <form action="index.php?pg=updateConta" method="POST" enctype="multipart/form-data" class="perfil d-flex flex-column justify-content-center align-items-center">
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
                <input type="file" id="imagem" name="update_image" accept="image/jpg, image/jpeg, image/png" class="w-100">
            </div>

            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<div class="message">'.$message.'</div>';
                    }
                }

                if(isset($sucessMessage)){
                    foreach($sucessMessage as $sucessMessage){
                        echo '<div class="sucessMessage">'.$sucessMessage.'</div>';
                    }
                }
            ?>
        
            <p class="text-white mt-5 col-12 col-md-6">Olá, <?php echo $fetch['name']; ?></p>

            <div class="campos mb-3 col-12 col-sm-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control fw-bold" id="nome" name="update_name" value="<?php echo $fetch["name"] ?>" placeholder="Altere o seu nome">
            </div>
            <div class="campos mb-3 col-12 col-sm-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control fw-bold" id="email" name="update_email" value="<?php echo $fetch["email"] ?>" placeholder="Altere o seu email">
            </div>
            <div class="campos mb-3 col-12 col-sm-6">
                <label for="senha" class="form-label">Senha Atual</label>
                <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
                <input type="password" class="form-control fw-bold" id="senha" name="update_pass" placeholder="Digite sua senha atual">
            </div>
            <div class="campos mb-3 col-12 col-sm-6">
                <label for="senha" class="form-label">Nova Senha</label>
                <input type="password" class="form-control fw-bold" id="senha" name="new_pass" placeholder="Altere para uma nova senha">
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-end gap-4 flex-wrap">
                <a href="index.php?logout=true" class="sair d-flex flex-row align-items-center justify-content-center gap-2">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span class="span d-flex align-items-center">Sair</span>
                </a>
                <button type="submit" name="update_profile" value="update_profile" class="btn">Salvar</button>
            </div>
        </form>
    </div>
</section>