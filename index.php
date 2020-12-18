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
      <section class="offers">
        <div class="large-offer">
          <div class="large-offer__img">
            <div class="large-offer__title">
            <?php
              $sql = "SELECT `name` FROM products WHERE `id` = 1";
              $result = $con->query($sql);
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      echo $row["name"];
                    }
                  }
            ?>
            </div>
          </div>
          <div class="large-offer__description">
            <?php
                $sql = "SELECT `description` FROM productsdescription WHERE `id` = 1";
                $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        echo $row["description"];
                      }
                    }
            ?>
          </div>
          <a href="#" class="buy__btn">Buy</a>
        </div>
        <div class="little-offer">
          <img class="little-offer__img" src="images/2.webp" alt="">
          <div class="little-offer__title">
          <?php
                $sql = "SELECT `name` FROM products WHERE `id` = 2";
                $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        echo $row["name"];
                      }
                    }
          ?>
          </div>
          <div class="little-offer__description">
          <?php
                $sql = "SELECT `description` FROM productsdescription WHERE `id` = 2";
                $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        echo $row["description"];
                      }
                    }
            ?>
          </div>
          <a href="product.html" class="buy__btn">Buy</a>
        </div>
      </section>
      <section class="products" id="products">
        <h1 class="title">popular products</h1>
        <div class="products__body">
        <?php
          $sql = "SELECT * FROM products";
              $result = $con->query($sql);
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo '<div class="product" data-id="'.$row["id"].'">
                          <a href="product.html" class="product__link">
                            <img class="product__img" src="images/prod/'.$row["id"].'.jpg" alt="'.$row["name"].'">
                            <h6 class="product__name">'.$row["name"].'</h6>
                            <h5 class="product__price">$'.$row["price"].'</h5>
                          </a>
                          <button type="button" class="offer__btn">Add to cart</button>
                        </div>';
                }
              }
        ?>
        </div>
      </section>
      <section class="portfolio" id="about-us">
        <h1 class="title">about us</h1>
        <div class="arrows">
          <div class="arrows__prev"><i class="fas fa-long-arrow-alt-left"></i></div>
          <div class="arrows__next"><i class="fas fa-long-arrow-alt-right"></i></div>
        </div>
        <div class="slider">
        <?php
          $sql = "SELECT * FROM portfolio";
              $result = $con->query($sql);
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo '<div class="slide">
                          <img src="images/3.png" alt="" class="slide__img">
                          <h4 class="slide__name">'.$row["name"].'</h4>
                          <div class="slide__position">'.$row["position"].'</div>
                        </div>';
                }
              }
        ?>
        </div>
      </section>
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