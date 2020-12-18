<?php
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $database = 'samsung';

    $con = new mysqli($host, $user, $password, $database);
    if ($con->connect_error) {
        die("connection failed " .$con->connect_error);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Samsung</title>
  <link rel="shortcut icon" href="/images/samsung.ico" type="image/x-icon">
  <link rel="stylesheet" href="stylesheets/style.min.css">
  <link rel="stylesheet" href="magnific-popup/dist/magnific-popup.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css">
</head>

<body>
  <?php
    require_once "blocks/header.php";
  ?>
  
  <main class="main">
        <div class="container">
            <div class="main__inner">
                <form method="post" action="check.php" class="registration">
                    <fieldset class="registration__fieldset">
                        <label for="reg-name">Enter your name</label>
                        <input id="reg-name" name="login" type="text" class="registration__name">
                        <label for="reg-tel">Enter your telephone</label>
                        <input id="reg-tel" name="telephone" type="tel" class="registration__tel">
                        <label for="reg-password">Enter your password</label>
                        <input id="reg-password" name="password" type="password" class="registration__password">
                        <div class="registration__male">
                            <span class="registration__span">Choose your male</span>
                            <label for="reg-male">Male</label>
                            <input name="gender" value="male" id="reg-male" type="radio">
                            <label for="reg-femail">Female</label>
                            <input name="gender" value="female" id="reg-female" type="radio">
                        </div>
                        <button class="registration__submit" type="submit">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
  
  <?php
    require_once "blocks/footer.php";
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/libs.min.js"></script>
  <script src="magnific-popup/dist/jquery.magnific-popup.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/cart.js"></script>
</body>

</html>

<?php
  $con->close();
?>