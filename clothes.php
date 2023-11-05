<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styleClothes.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script
    &family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>G-Shop | Clothes</title>
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
                        <i class="nav__photo__1" href="#"><img src="assets/images/icon.png" alt="gg" width="25"
                                height="25"></i>
                        <i class="nav__photo__2"><img src="assets/images/cart.png" alt="gg" width="25"
                                height="25"></i>
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

    <section class="section__catalog">
        <div class="container">
            <div class="catalog__header">
                <h1 class="catalog__title">Clothes</h1> 
                <nav class = "catalog__nav">
                    <ul class = "catalog__nav__wrapper">
                        <li class="catalog__nav__item">
                            <button class="catalog__nav__btn active" type="button">All</button>
                        </li>
                        <li class="catalog__nav__item">
                            <button class="catalog__nav__btn" type="button">Tops</button>
                        </li>
                        <li class="catalog__nav__item">
                            <button class="catalog__nav__btn" type="button">Trousers</button>
                        </li>
                        <li class="catalog__nav__item">
                            <button class="catalog__nav__btn" type="button">Sneakers</button>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="catalog">
                <div class="catalog__item">
                    <div class="product">
                        <img class="product__image" src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/0/6/06-07-2022_SI_771910515-V0091_1_1.jpg" 
                            alt="">
                            <h3 class="product__title">STONE ISLAND SHADOW PROJECT</h3>
                            <p class="product__description">NATURAL BEIGE</p>
                            <span class="product__price">90.725 RUB</span>
                            <i class="product__cart"><ion-icon name="cart-outline"></ion-icon></i>
                    </div>
                </div>
                <div class="catalog__item">
                    <div class="product">
                        <img class="product__image" src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/0/1/01-07-2022_LL_771540223-V0065_1_1.jpg" 
                            alt="">
                            <h3 class="product__title">STONE ISLAND CRINKLE REPS JACKET</h3>
                            <p class="product__description">CHARCOAL</p>
                            <span class="product__price">84.075 RUB</span>
                            <i class="product__cart"><ion-icon name="cart-outline"></ion-icon></i>
                    </div>
                </div>
                <div class="catalog__item">
                    <div class="product">
                        <img class="product__image" src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/0/6/06-07-2022_LL_8054482-135493-B2412_1_1.jpg" 
                            alt="">
                            <h3 class="product__title">BURBERRY FITZROY HARRINGTON JACKET</h3>
                            <p class="product__description">TRUFFLE IP CHECK</p>
                            <span class="product__price">137.655 RUB</span>
                            <i class="product__cart"><ion-icon name="cart-outline"></ion-icon></i>
                    </div>
                </div>
                <div class="catalog__item">
                    <div class="product">
                        <img class="product__image" src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/0/6/06-01-2023-BLR_X000006919-002291_m1_1.jpg" 
                            alt="">
                            <h3 class="product__title">ARC'TERYX THORIUM HOODED JACKET</h3>
                            <p class="product__description">BLACK</p>
                            <span class="product__price">37.905 RUB</span>
                            <i class="product__cart"><ion-icon name="cart-outline"></ion-icon></i>
                    </div>
                </div>
                <div class="catalog__item">
                    <div class="product">
                        <img class="product__image" src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/0/4/04-11-2021_JD_UE52TR240G_1_1.jpg" 
                            alt="">
                            <h3 class="product__title">VETEMENTS HAUTE COUTURE LOGO TEE</h3>
                            <p class="product__description">GREY MELANGE</p>
                            <span class="product__price">36.955 RUB</span>
                            <i class="product__cart"><ion-icon name="cart-outline"></ion-icon></i>
                    </div>
                </div>
                <div class="catalog__item">
                    <div class="product">
                        <img class="product__image" src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/2/3/23-01-2023-JA_1A000-01-M2561-F92_1_1.jpg" 
                            alt="">
                            <h3 class="product__title">MONCLER GENIUS CAMO JACKET</h3>
                            <p class="product__description">GREY</p>
                            <span class="product__price">170.525 RUB</span>
                            <i class="product__cart"><ion-icon name="cart-outline"></ion-icon></i>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section__catalog__2">
        <div class="container">
            <div class="catalog">
                <div class="catalog__item">
                    <div class="product">
                        <img class="product__image" src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/1/4/14-010-2022_LL_PF22MFP089-001_1_1.jpg" 
                            alt="">
                            <h3 class="product__title">AMIRI CRINKLE NYLON PANT</h3>
                            <p class="product__description">BLACK MULTI</p>
                            <span class="product__price">90.155 RUB</span>
                            <i class="product__cart"><ion-icon name="cart-outline"></ion-icon></i>
                    </div>
                </div>
                <div class="catalog__item">
                    <div class="product">
                        <img class="product__image" src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/2/4/24-02-2023-si_672698-zaku1-9285_1.jpg" 
                            alt="">
                            <h3 class="product__title">GUCCI PATTERNED SHORT</h3>
                            <p class="product__description">IVORY</p>
                            <span class="product__price">79.325 RUB</span>
                            <i class="product__cart"><ion-icon name="cart-outline"></ion-icon></i>
                    </div>
                </div>
                <div class="catalog__item">
                    <div class="product">
                        <img class="product__image" src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/1/9/19-10-2022_ns_pf22mds052-030_1.jpg" 
                            alt="">
                            <h3 class="product__title">AMIRI MX1 CAMO JEAN</h3>
                            <p class="product__description">GREY</p>
                            <span class="product__price">86.925 RUB</span>
                            <i class="product__cart"><ion-icon name="cart-outline"></ion-icon></i>
                    </div>
                </div>
                <div class="catalog__item">
                    <div class="product">
                        <img class="product__image" src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/1/4/14-12-2022_JC_DQ4137-300_m1_1.jpg" 
                            alt="">
                            <h3 class="product__title">NIKE X BILLIE EILISH AIR FORCE 1 SP</h3>
                            <p class="product__description">SEQUOIA</p>
                            <span class="product__price">17.775 RUB</span>
                            <i class="product__cart"><ion-icon name="cart-outline"></ion-icon></i>
                    </div>
                </div>
                <div class="catalog__item">
                    <div class="product">
                        <img class="product__image" src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/2/0/20-09-2022_ns_dm8465-001_m1.jpg" 
                            alt="">
                            <h3 class="product__title">NIKE X AMBUSH AIR ADJUST FORCE SP</h3>
                            <p class="product__description">BLACK, WHITE & PURPLE</p>
                            <span class="product__price">18.050 RUB</span>
                            <i class="product__cart"><ion-icon name="cart-outline"></ion-icon></i>
                    </div>
                </div>
                <div class="catalog__item">
                    <div class="product">
                        <img class="product__image" src="https://media.endclothing.com/media/f_auto,q_auto:eco,w_768/prodmedia/media/catalog/product/1/3/13-05-2022_SI_DC6078-002_1_1.jpg" 
                            alt="">
                            <h3 class="product__title">NIKE AIR MAX TERRASCAPE PLUS</h3>
                            <p class="product__description">BLACK & LIME ANTHRACITE</p>
                            <span class="product__price">15.675 RUB</span>
                            <i class="product__cart"><ion-icon name="cart-outline"></ion-icon></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <script src ="assets\javascript\cart.js"></script>
    <script src ="assets\javascript\script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>