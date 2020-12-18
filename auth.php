<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 2 || mb_strlen($login) > 90) {
        echo "error1";
        exit();
    }

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpassword = 'root';
    $database = 'samsung';

    $link = new mysqli($dbhost, $dbuser, $dbpassword, $database); 

    $result = $link->query("SELECT * FROM `users` WHERE `login1` = '$login' AND `password1` = '$password'");
    $user = $result->fetch_assoc();
    if(!$user) {
        echo '<script>setTimeout(\'location="http://samsung"\', 0)</script>';
        echo "<script>alert('Wrong login or password')</script>";
        exit();
    }

    setcookie('user', $user["login1"], time() + 3600, "/");
    setcookie('user-id', $user["id"], time() + 3600, "/");
    header('Location: /');
    exit();

    $link->close();
?>