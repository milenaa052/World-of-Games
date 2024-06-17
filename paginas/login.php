<?php
    ob_start();
    include 'conn.php';

    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['password']);

        $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

        if(mysqli_num_rows($select) > 0){
            $row = mysqli_fetch_assoc($select);
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $email;
            header('location: index.php?pg=conta');
            exit;
        }else{
            $message[] = 'Email ou senha incorretos';
        }
    }

    ob_end_flush();
?>

<section class="cadastro">
    <h1 class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">Login</h1>

    <form action="" method="POST" enctype="multipart/form-data" class="card d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
        <?php
            if(isset($message)){
                foreach($message as $message){
                    echo '<div class="message">'.$message.'</div>';
                }
            }
        ?>     

        <div class="campos mb-3 col-12 col-sm-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control fw-bold" id="email" name="email" placeholder="email@gmail.com" required>
        </div>

        <div class="campos mb-3 col-12 col-sm-6">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control fw-bold" id="senha" name="password" placeholder="Digite a sua senha" required>
        </div>

        <div class="col-12 col-md-6 d-flex justify-content-end gap-2 flex-wrap">
            <span class="d-flex align-items-center">Não possui conta?</span>
            <a href="index.php?pg=cadastro" class="link d-flex align-items-center">Criar conta</a>
            <button type="submit" name="submit" value="Enviar" class="btn">Entrar</button>
        </div>
    </form>
</section>