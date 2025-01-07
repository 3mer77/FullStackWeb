<?php require_once CONFIG . 'Config.php'; ?>


<style>
    <?php include ASSETS . 'Style.css' ?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETHIO GAMES - Gaming website</title>

    <!-- 
    - favicon link
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- w
    - custom css link
  -->
    <link rel="stylesheet" href="../css/home.css">
    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fontaqs.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet">
</head>

<body id="top">

    <!-- 
    - #HEADER
-->

    <header class="header">

        <!-- 
    - overlay
    -->
        <div class="overlay" data-overlay></div>

        <div class="container">
            <div class="ethio">
                <a href="#" class="logo">
                    <img src="<?php echo BURL . 'assets/images/LogoR.png'; ?>" width="100" alt="not found">
                    <h2> ETHIO GAMES</h2>
                </a>
            </div>
            <button class="nav-open-btn" data-nav-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <nav class="navbar" data-nav>

                <div class="navbar-top">
                    <div class="ethio">
                        <a href="#" class="logo">
                            <img src="<?php echo BURL . 'assets/images/LogoR.png'; ?>" width="100" alt="not found">
                        </a>
                    </div>
                    <button class="nav-close-btn" data-nav-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                </div>

                <ul class="navbar-list">
                    <li>
                        <a href="<?php url("Home/index"); ?>" class="navbar-link">Home</a>
                    </li>

                    <li>
                        <a href="<?php url("product/index"); ?>" class="navbar-link">Products</a>
                    </li>
                    <li>
                        <a href="<?php url("feedback/index"); ?>" class="navbar-link">Feedback</a>
                    </li>

                    <li>
                        <a href="<?php url("login/index"); ?>" class="navbar-link">Logout</a>
                    </li>

                </ul>

                <ul class="nav-social-list">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-github"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </li>

                </ul>

            </nav>

        </div>

    </header>