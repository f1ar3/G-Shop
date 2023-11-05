<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script
    &family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>G-Shop</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a class="header__logo" href="index.php">G-Shop</a>

                <nav>
                    <a class="nav__link" href="#page2">About</a>
                    <a class="nav__link" href="contact.php">Contact</a>
                    <a class="nav__link" href="clothes.php">Clothes</a>
                    <div class="nav__photo">
                        <a class="nav__photo__1" href="#"><img src="assets/images/icon.png" alt="gg" width="25"
                                height="25"></a>
                        <a class="nav__photo__2" href="#"><img src="assets/images/cart.png" alt="gg" width="25"
                                height="25"></a>
                    </div>
                </nav>
                <div class="cart">
                    <span class="cart__close"><ion-icon name="close"></ion-icon></span>
                    <h2 class="cart__title">Your Cart</h2>
                    <div class="cart__content">
                    </div>
                    <div class="total">
                        <div class="total__title">Total</div>
                        <div class="total__price">0 RUB</div>
                    </div>
                    <button class="btn__buy" type="button">Buy Now</button>
                </div>
            </div>
        </div>

    </header>

    <div class="intro">
        <div class="container">
            <div class="intro__inner">
                <h2 class="intro__suptitle">Modern Beauty</h2>
                <h1 class="intro__title">Welcome to G-Shop</h1>

                <a class="btn" href="index.php#page2">Learn More</a>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <span class="icon__close"><ion-icon name="close"></ion-icon>
        </span>
        <div class="form-box__login">
            <h2 class="login">Login</h2>
            <form>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="text" name = "email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name = "password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="wrapper__btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
                  <p class="msg none"> Lorem ipsum dolor sit amet. </p> 
            </form>
        </div>

        <div class="form-box__register">
            <h2 class="register">Registration</h2>
            <form action="registration.php" method = "post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" name = "username" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" name = "email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name = "password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree with conditions</label>
                </div>
                <button type="submit" class="wrapper__btn__register">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
                <p class="msg none"> Lorem ipsum dolor sit amet. </p> 
            </form>
        </div>
    </div>

    <div class="popup">
        <div class="cookie__info">
            <p class="cookie__text">This website uses cookies to ensure you get the best experience on our website.</p>
            <button class="btn__cookie__decline">Decline</button>
            <button class="btn__cookie__allow">Allow cookies</button>
        </div>
    </div>

    <div class="window">
        <p class="txt">Cookies</p>
    </div>



    <section class="section">
        <div class="container">
            <div class="section__header">
                <h3 class="section__suptitle">What we do</h3>
                <h2 class="section__title">About us</h2>
                <div class="section__text">
                    <p>
                        At G-Shop, we never settle. We have an always testing,
                        "always in beta" philosophy, constantly improving to make
                        it all just that bit better every day. From free delivery
                        and returns to innovative visual search tech, if it hasn’t
                        been done before, we find a way to do it anyway.
                    </p>
                </div>
            </div>
            <div class="services">
                <div class="service__item">
                    <img class="service__icon" src="assets/images/tshirt.png" alt="" width="30" height="30">
                    <div class="service__title">Clothes</div>
                    <div class="service__text">Choice for all</div>
                </div>
                <div class="service__item">
                    <img class="service__icon" src="assets/images/price.png" alt="" width="30" height="30">
                    <div class="service__title">Prices</div>
                    <div class="service__text">Affordable Prices</div>
                </div>
                <div class="service__item">
                    <img class="service__icon" src="assets/images/delivery-man.png" alt="" width="35" height="35">
                    <div class="service__title">Delivery</div>
                    <div class="service__text">Premier Delivery</div>
                </div>
            </div>
        </div>
    </section>

    <div class="statistics">
        <a id="page2"></a>
        <div class="container">
            <div class="stat">
                <div class="stat__item">
                    <div class="stat__text">Huge Number Of Brands</div>
                </div>
                <div class="stat__item">
                    <div class="stat__text">Frequent prize drawing</div>
                </div>
                <div class="stat__item">
                    <div class="stat__text">Convenient and fast shopping</div>
                </div>
                <div class="stat__item">
                    <div class="stat__text">Delivery To All Countries</div>
                </div>
                <div class="stat__item">
                    <div class="stat__text">The Friendliest Cunsultants</div>
                </div>
            </div>
        </div>
    </div>



    <footer class="networks">
        <div class="container">
            <div class="networks__items">
                <div class="networks__logo">
                    <img src="assets/images/logo.png" alt="" height="50" width="50">
                </div>
                <nav class="networks__nav">
                    <a class="networks__icons" href="https://vk.com/goshaapolonov"><img src="assets/images/vk.png" alt=""
                            width="40" height="40"></a>
                    <a class="networks__icons" href="https://t.me/apolonovvv"><img src="assets/images/telegram.png" alt=""
                            width="40" height="40"></a>
                    <a class="networks__icons" href="https://www.instagram.com/apolonoff36/"><img
                            src="assets/images/instagram.png" alt="" width="40" height="40"></a>
                    <a class="networks__icons" href="https://www.youtube.com/channel/UCRiXzwpcO0oAFAMCLfN3d4g"><img
                            src="assets/images/youtube.png" alt="" width="40" height="40"></a>
                    <a class="networks__icons" href="https://www.twitter.com"><img src="assets/images/twitter.png" alt=""
                            width="40" height="40"></a>
                    <a class="networks__icons" href="https://www.facebook.com"><img src="assets/images/facebook.png" alt=""
                            width="40" height="40"></a>
                    <a class="networks__icons" href="https://www.tiktok.com"><img src="assets/images/tiktok.png" alt=""
                            width="40" height="40"></a>
                </nav>
                <div class="phone">
                    <img src="assets/images/phone.png" alt="" height="40" width="40">
                </div>
                <div class="networks_communication">
                    <div class="number">8-961-109-51-55</div>
                    <div class="networks__text">Communication for cooperation</div>
                </div>
            </div>
        </div>
    </footer>
    

    <script src="assets\javascript\jquery-3.4.1.min.js"></script>
    <script src="assets\javascript\main.js"></script>
    <script src="assets\javascript\script.js"></script>
    <script src="assets\javascript\cookie.js"></script>
    <script src="assets\javascript\cart.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
    
    </html>