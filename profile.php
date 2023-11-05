<?php
session_start();

require_once 'connect.php';

$idForEdit = $_SESSION['user']['id'];

$userForEdit = mysqli_query($connect, "SELECT * FROM `users` WHERE 'id' = '$idForEdit'");
$userForEdit = mysqli_fetch_assoc($userForEdit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styleProfile.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script
    &family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Profile</title>
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
                <h1 class="intro__title">Profile</h1>
            </div>
            <div class="profile__info">
                <form class = "form__data">
                    <h2 class="user__data">Username: <?= $_SESSION['user']['username'] ?></h2>
                    <h2 class="user__data">Email: <?= $_SESSION['user']['email'] ?></h2>
                    <h2 class="user__data">Password: <?= $_SESSION['user']['password'] ?></h2>
                    <a class = "exit" href="logout.php">Exit</a>
                </form>
                <div class="profile__btns">
                    <a class = "edit" href="#">Edit Profile</a>
                    <a class = "delete" href="delete.php?id=<?= $_SESSION['user']['id'] ?>">Delete Profile</a>
                </div>
            </div>
            <div class="profile__update">
            <form class = "profile__edit" action = "update.php" method = "post">
                <input type = "hidden" name = "id" value = "<?= $_SESSION['user']['id'] ?>">
                <p>Username</p>
                <input type = "text" name = "username" value = "<?= $_SESSION['user']['username'] ?>">
                <p>Email</p>
                <input type = "email" name = "email" value = "<?= $_SESSION['user']['email'] ?>">
                <p>Password</p>
                <input type = "text" name = "password" value = "<?= $_SESSION['user']['password'] ?>">
                <button type = "submit">Edit</button>
            </form> 
            </div>
        </div>
    </div>

    

    <script src="assets\javascript\cart.js"></script>
    <script src="assets\javascript\profile.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>