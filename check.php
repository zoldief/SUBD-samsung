<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $telephone = filter_var(trim($_POST['telephone']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);
    $gender = filter_var(trim($_POST['gender']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 2 || mb_strlen($login) > 90) {
        echo "error1";
        exit();
    } else if(mb_strlen($telephone) < 5 || mb_strlen($telephone) > 90) {
        echo "error2";
        exit();
    } 

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpassword = 'root';
    $database = 'samsung';

    $link = mysqli_connect($dbhost, $dbuser, $dbpassword, $database) 
    or die("Ошибка " . mysqli_error($link));
    if (!$link) {
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    } else {
        $bool = false;
        $query1 = mysqli_query($link, "SELECT * FROM `users` WHERE login1 = '$login'");
        while($row = mysqli_fetch_array($query1)) {
            if ($row["login1"] == $login) {
                $bool = true;
            } else {
                $bool = false;
            }
        }
        if ($bool === true) {
            echo "<h1>NOOOOOOOOOOOOOOOOOOOOOOOO</h1>";
        } else {
            $query = mysqli_query($link, "INSERT INTO `users` (`login1`, `telephone`, `password1`, `gender`) VALUES ('$login', '$telephone', '$password', '$gender');");
        }
    }

    mysqli_close($link);

    echo '<script>setTimeout(\'location="http://samsung-v5"\', 100)</script>';
?>