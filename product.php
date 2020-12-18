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
    <title></title>
    <link rel="stylesheet" href="stylesheets/style.min.css">
    <link rel="stylesheet" href="../magnific-popup/dist/magnific-popup.css">
</head>

<body>
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
                        <div class="user__title"><i class="far fa-user"></i></div>
                        <form method="POST" action="#" class="user-form">
                            <div class="user-form__title"><i class="fas fa-sign-in-alt"></i> Login</div>
                            <input type="tel" id="user-tel" class="user-form__input">
                            <input type="password" class="user-form__input" id="user-password">
                            <button class="user-form__submit" id="user-submit" type="submit">sign in</button>
                            <a href="#" class="user-form__link">or create new accaunt</a>
                        </form>
                    </div>
                    <div tabindex="0" id="cart" class="cart header-control__btn">
                        <div class="cart__title"><i class="fas fa-shopping-basket"></i></div>
                        <span class="cart__quantity">1</span>
                        <div class="cart-content">
                            <ul class="cart-content__list">
                                <li class="cart-content__item">
                                    <article class="cart-content__product cart-product">
                                        <img src="./images/prod/1.jpg" class="cart-product__img" alt="">
                                        <div class="cart-product__title">NAME</div>
                                        <div class="cart-product__control">
                                            <div class="cart-product__count">1pcs</div>
                                            <div class="cart-product__price">200$</div>
                                        </div>
                                        <button class="cart-product__delete"><i class="far fa-trash-alt"></i></button>
                                    </article>
                                </li>
                                <li class="cart-content__item">
                                    <article class="cart-content__product cart-product">
                                        <img src="./images/prod/2.jpg" class="cart-product__img" alt="">
                                        <div class="cart-product__title">NAME</div>
                                        <div class="cart-product__control">
                                            <div class="cart-product__count">1pcs</div>
                                            <div class="cart-product__price">200$</div>
                                        </div>
                                        <button class="cart-product__delete"><i class="far fa-trash-alt"></i></button>
                                    </article>
                                </li>
                                <li class="cart-content__item">
                                    <article class="cart-content__product cart-product">
                                        <img src="./images/prod/3.jpg" class="cart-product__img" alt="">
                                        <div class="cart-product__title">NAME</div>
                                        <div class="cart-product__control">
                                            <div class="cart-product__count">1pcs</div>
                                            <div class="cart-product__price">200$</div>
                                        </div>
                                        <button class="cart-product__delete"><i class="far fa-trash-alt"></i></button>
                                    </article>
                                </li>
                            </ul>
                            <div class="cart-content__bottom">
                                <div class="cart-content__fullPrice">
                                    <span>Total price:</span>
                                    <span class="fullPrice">2000$</span>
                                </div>
                                <button class="cart-content__AddToCart">Add to cart</button>
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
                <a href="#about-us" class="nav__item"><span href="#" class="nav__text">About us</span></a>
                <a href="#products" class="nav__item"><span href="#" class="nav__text">Products</span></a>
                <a href="#footer" class="nav__item"><span href="#" class="nav__text">Contacts</span></a>
            </div>
        </div>
    </div>
    <main class="main">
        <div class="container">
            <div class="product-page">
                <div class="product-page__body">
                    <img src="images/prod/1.jpg" class="product-page__img">
                    <div class="product-page__text">
                        <div class="product-page__title">NAME</div>
                        <div class="product-page__description">DESCRIPTION</div>
                        <div class="product-page__row">
                            <div class="product-page__price"><span class="product-page__span">Price:</span> 200$</div>
                            <div class="product-page__count"><span class="product-page__span">In sale:</span> 30</div>
                        </div>
                        <button data-poductId="1" type="button" class="offer__btn">Add to cart</button>
                    </div>
                    </img>
                </div>
            </div>
    </main>
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
                        In 2013, revenue of Samsung Electronics, the group's flagship company, was 228 trillion Korean
                        won (about
                        201 billion
                        dollars), which exceeded the same figure for Hewlett-Packard, Siemens and Apple.
                    </div>
                </div>
                <div class="social-send">
                    <div class="social">
                        <a href="#" class="social__link">Facebook</a>
                        <a href="#" class="social__link">Twitter</a>
                        <a href="#" class="social__link">Instagram</a>
                    </div>
                    <form class="send">
                        <input placeholder="your email@" type="email" class="send__input" id="send-input"><br>
                        <button class="send__btn" id="send-btn">send</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/libs.min.js"></script>
    <script src="magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>