<?php

include 'conn.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = './img/uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select) > 0){
      $message[] = 'O usuário já existe'; 
    }else{
        if($image_size > 2000000){
         $message[] = 'O tamanho da imagem é muito grande!';
        }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');
         
        if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $sucessMessage[] = 'Registrado com sucesso!';
            echo '<script type="text/javascript">';
            echo 'window.location.href="login";';
            echo '</script>';
        }else{
            $message[] = 'Registro falhou!';
        }
      }
   }
}
?>

<section class="cadastro">
    <h1 class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">Cadastro</h1>

    <form action="cadastro" method="POST" enctype="multipart/form-data" class="card d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
        <?php
            if(isset($message)){
                foreach($message as $message){
                    echo '<div class="message">'.$message.'</div>';
                }
            }
        ?>    

        <div class="campos mb-3 col-12 col-sm-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control fw-bold" id="nome" name="name" placeholder="Digite o seu nome" required>
        </div>

        <div class="campos mb-3 col-12 col-sm-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control fw-bold" id="email" name="email" placeholder="email@gmail.com" required>
        </div>

        <div class="campos mb-3 col-12 col-sm-6">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control fw-bold" id="senha" name="password" placeholder="Digite a sua senha" required>
        </div>

        <div class="campos d-none mb-3 col-sm-6 col-xl-4">
            <input type="file" id="image" name="image" accept="image/jpg, image/jpeg, image/png" class="w-100">
        </div>

        <div class="col-12 col-md-6 d-flex justify-content-end gap-2">
            <span class="d-flex align-items-center">Já possui conta? Faça login</span>
            <a href="login" class="link d-flex align-items-center">Faça Login</a>
            <button type="submit" name="submit" id="submit" class="btn">Cadastrar</button>
        </div>
    </form>
</section>