<?php
    setcookie('user', $user['login1'], time() - 3600, "/");
    header('Location: /');
?>