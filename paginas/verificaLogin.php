<?php
    session_start();

    if($_POST['submit'] && !empty($_POST['email']) && !empty($_POST['senha'])) {

        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: index.php?pg=login');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: index.php?pg=conta');
        }
    } else {
        header('Location: index.php?pg=login');
    }