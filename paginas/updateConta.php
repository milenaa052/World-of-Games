<?php 
    $logado = isset($_SESSION['email']);

    include 'conn.php';
    $user_id = $_SESSION['user_id'];

    if(isset($_POST['update_profile'])){

        $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
        $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
     
        mysqli_query($conn, "UPDATE `user_form` SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');

        $old_pass = mysqli_real_escape_string($conn, $_POST['old_pass']);
        $update_pass = mysqli_real_escape_string($conn, $_POST['update_pass']);
        $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
     
        if(!empty($update_pass) || !empty($new_pass)){
            if($update_pass === $old_pass){
                if ($update_pass === $new_pass) {
                    $message[] = 'A nova senha deve ser diferente da senha atual';
                } else {
                    mysqli_query($conn, "UPDATE `user_form` SET password = '$new_pass' WHERE id = '$user_id'") or die('query failed');
                    $sucessMessage[] = 'Senha atualizada com sucesso!';
                }
            }else {
                $message[] = 'Senha antiga não corresponde!';
            }
        }
     
        $update_image = $_FILES['update_image']['name'];
        $update_image_size = $_FILES['update_image']['size'];
        $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
        $update_image_folder = './img/uploaded_img/'.$update_image;
     
        if(!empty($update_image)){
           if($update_image_size > 2000000){
              $message[] = 'O tamanho da imagem é muito grande!';
           }else{
              $image_update_query = mysqli_query($conn, "UPDATE `user_form` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
              if($image_update_query){
                 move_uploaded_file($update_image_tmp_name, $update_image_folder);
              }
              $sucessMessage[] = 'Imagem atualizada com sucesso!';
           }
        }

        echo '<script type="text/javascript">';
        echo 'window.location.href="index.php?pg=conta";';
        echo '</script>';
        exit;
    }