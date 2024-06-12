<?php
    session_start();

    if($_POST['submit'] && !empty($_POST['email']) && !empty($_POST['password'])) {

        include_once('config.php');
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM user_form WHERE email = '$email' and password = '$pass'";

        $result = $conn->query($sql);

        if(mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: index.php?pg=login');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $pass;
            header('Location: index.php?pg=conta');
        }
    } else {
        header('Location: index.php?pg=login');
    }