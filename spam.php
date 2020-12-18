<?php
    $input = filter_var(trim($_POST['spam-input']),
    FILTER_SANITIZE_STRING);

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpassword = 'root';
    $database = 'samsung';

    $link = mysqli_connect($dbhost, $dbuser, $dbpassword, $database) 
    or die("Ошибка " . mysqli_error($link));
    if (!$link) {
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    } else {
        $query = mysqli_query($link, "INSERT INTO `spam` (`email`) VALUES ('$input');");
    }

    mysqli_close($link);

    header('Location: /');
?>