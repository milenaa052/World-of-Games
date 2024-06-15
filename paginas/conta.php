<?php
    $logado = isset($_SESSION['email']);

    include './config.php';
    $user_id = $_SESSION['user_id'];

    if(!isset($user_id)){
        header('location: index.php?pg=login');
        exit;
    };

    if(isset($_POST['update_profile'])){

        $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
        $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
     
        mysqli_query($conn, "UPDATE `user_form` SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');

        $old_pass = $_POST['old_pass'];
        $update_pass = mysqli_real_escape_string($conn, $_POST['update_pass']);
        $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
     
        if(!empty($update_pass) || !empty($new_pass)){
            if($update_pass === $old_pass){
               $message[] = 'senha antiga não corresponde!';
            }else{
               mysqli_query($conn, "UPDATE `user_form` SET password = '$new_pass' WHERE id = '$user_id'") or die('query failed');
               $message[] = 'password updated successfully!';
            }
        }
     
        $update_image = $_FILES['update_image']['name'];
        $update_image_size = $_FILES['update_image']['size'];
        $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
        $update_image_folder = './img/uploaded_img/'.$update_image;
     
        if(!empty($update_image)){
           if($update_image_size > 2000000){
              $message[] = 'image is too large';
           }else{
              $image_update_query = mysqli_query($conn, "UPDATE `user_form` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
              if($image_update_query){
                 move_uploaded_file($update_image_tmp_name, $update_image_folder);
              }
              $message[] = 'image updated succssfully!';
           }
        }
     
    }
?>

<section class="conta">
    <div class="w-100 d-flex flex-column justify-content-center">
        <form action="" method="POST" enctype="multipart/form-data" class="perfil d-flex flex-column justify-content-center align-items-center">
            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<div class="message">'.$message.'</div>';
                    }
                }
            ?>
    
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
        
            <p class="text-white mt-5 col-6">Olá, <?php echo $fetch['name']; ?></p>

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