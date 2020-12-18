

  <footer class="footer" id="footer">
    <div class="container">
      <div class="footer__inner">
        <div class="footer-nav">
          <a href="#" class="footer-nav__link">Home</a>
          <a href="#" class="footer-nav__link">About us</a>
          <a href="#" class="footer-nav__link">Products</a>
        </div>
        <div class="footer-blockquote">
          <h3 class="footer-blockquote__title"><a href="https://www.samsung.com/us/">SAMSUNG.COM</a></h3>
          <div class="footer-blockquote__quote">
            In 2013, revenue of Samsung Electronics, the group's flagship company, was 228 trillion Korean won (about
            201 billion
            dollars), which exceeded the same figure for Hewlett-Packard, Siemens and Apple.
          </div>
        </div>
        <div class="social-send">
          <div class="social">
            <?php
              $sql = "SELECT * FROM social";
              $result = $con->query($sql);
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo '<a href="'.$row["link"].'" class="social__link">'.$row["title"].'</a> ';
                }
              }
            ?>
          </div>
          <form method="post" action="spam.php" class="send">
            <input name="spam-input" placeholder="your email@" type="email" class="send__input" id="send-input"><br>
            <button class="send__btn" id="send-btn">send</button>
          </form>
        </div>
      </div>
    </div>
  </footer>