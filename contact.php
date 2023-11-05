<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styleContact.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script
    &family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>G-Shop | Contact</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a class="header__logo" href = "index.php">G-Shop</a>

                <nav>
                    <a class="nav__link" href="index.php#page2">About</a>
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
                <h2 class="intro__suptitle">Contact</h2>
                <h1 class="intro__title">Creator</h1>
            </div>
    
            <div class="information">
                <div class="info__items">
                    <img class="info_photo" src="assets/images/myphoto.jpg" 
                    alt="" width="600" height="400">
                    <div class="info__about">
                    <div class="info__name">Georgiy Zagorodnev</div>
                    <div class="info__text">I'm a first-year student of the Faculty
                        of Computer Science of Voronezh State University. I really like
                        the theme of fashion, so i decided to create my own website, where
                        everyone can find clothes to their taste.<br><br>
                        My social networks: </div>
                    <div class="information__networks">
                        <a class="networks__icons" href="https://vk.com/goshaapolonov"><img src="assets/images/vk.png" 
                            alt="" width="40" height="40"></a>
                        <a class="networks__icons" href="https://t.me/apolonovvv"><img src="assets/images/telegram.png" 
                            alt="" width="40" height="40"></a>
                        <a class="networks__icons" href="https://www.instagram.com/apolonoff36/"><img src="assets/images/instagram.png" 
                            alt="" width="40" height="40"></a>
                        <a class = "networks__icons" href="https://www.twitter.com"><img src = "assets/images/twitter.png" 
                            alt = "" width="40" height="40"></a>
                        <a class = "networks__icons" href="https://www.facebook.com"><img src = "assets/images/facebook.png" 
                            alt = "" width="40" height="40"></a>
                        <a class = "networks__icons" href="mailto:goshaapolonoff@yandex.ru"><img src = "assets/images/mail.png" 
                            alt = "" width="40" height="40"></a>
                    </div>
                    </div>
                </div>
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

    <script src="assets\javascript\jquery-3.4.1.min.js"></script>
    <script src="assets\javascript\main.js"></script>
    <script src = "assets\javascript\script.js"></script>
    <script src = "assets\javascript\cart.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>