


  <header class="header">
    <div class="container">
      <div class="header__inner">
        <form class="search">
          <fieldset class="search__area">
            <input placeholder="SEARCH" type="text" id="search__input" class="search__input">
            <button id="search__btn" class="search__btn"><i class="fas fa-search"></i></button>
          </fieldset>
        </form>
        <h1 class="logo">samsung</h1>
        <div class="header-control">
          <div class="header-control__btn user">
          <?php
            if ($_COOKIE['user'] == ''):
          ?>
          <div class="user__title"><i class="far fa-user"></i></div>
            <form method="POST" action="auth.php" class="user-form">
              <div class="user-form__title"><i class="fas fa-sign-in-alt"></i> Login</div>
              <input type="tel" id="user-tel" name="login" class="user-form__input">
              <input type="password" name="password" class="user-form__input" id="user-password">
              <button class="user-form__submit" id="user-submit" type="submit">sign in</button>
              <a href="registration.php" class="user-form__link">or create new accaunt</a>
            </form>
          </div>
          <?php else: ?>
          <div class="user__title"><i class="far fa-user"></i></div>
            <div class="user-form">
              <div class="user-form__title"><?=$_COOKIE['user']?></div>
              <a href="exit.php" class="user-form__submit">Log out</a>
            </div>
          </div>
          <?php endif;?>
          <div tabindex="0" id="cart" class="cart header-control__btn">
            <div class="cart__title"><i class="fas fa-shopping-basket"></i></div>
            <span class="cart__quantity"></span>
            <div class="cart-content">
              <ul data-simplebar class="cart-content__list">
              </ul>
              <div class="cart-content__bottom">
                <div class="cart-content__fullPrice">
                  <span>Total price:</span>
                  <span class="fullPrice"></span>
                </div>
                <a href="#cart-form" class="cart-content__AddToCart">Buy</a>
                <form id="cart-form" method="post" action="order.php" class="mfp-hide white-popup-block cart-form">
                  <h1 class="cart-form__title">Order</h1>
                  <fieldset class="cart-form__fieldset">
                    <div class="cart-form__label">Items in order: <span class="cart-form__items"></span></div>
                    <div class="cart-form__label">Total price in order: <span class="cart-form__fullPrice"></span>
                    </div>
                  </fieldset>
                  <div class="cart-form__label">Select a payment method:</div>
                  <div class="cart-form__payment">
                    <input name="cart-form__cash" type="radio" class="cart-form__radio" id="cart-form__radio-1">
                    <label for="cart-form__radio-1">By cash</label>
                    <input name="cart-form__card" type="radio" class="cart-form__radio" id="cart-form__radio-2">
                    <label for="cart-form__radio-2">By card</label>
                  </div>
                  <button class="cart-form__submit" type="submit">Checkout</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="nav">
    <div class="container">
      <div class="nav__inner">
        <a href="https://www.samsung.com/us/" class="nav__item"><span href="#" class="nav__text">Home</span></a>
        <a href="#about-us" class="nav__item"><span class="nav__text">About us</span></a>
        <a href="#products" class="nav__item"><span class="nav__text">Products</span></a>
        <a href="#footer" class="nav__item"><span class="nav__text">Contacts</span></a>
      </div>
    </div>
  </div>