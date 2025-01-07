<?php
session_start();



// if (isset($_POST['submit'])) {

//     $name = $_POST['product_name'];
//     $desc = $_POST['product_desc'];
//     $price = (int) $_POST['product_price'];
//     $qty = 1;

//     $select_cart = mysqli_query($coon, "SELECT * from cart where product_name = '$name'");

//     if (mysqli_num_rows($select_cart) > 0) {
//         $msg[] = "the product is already added to the cart";
//     } else {
//         $insert_cart = mysqli_query($coon, "INSERT INTO cart (product_name,product_price,product_desc,qty) 
//         values('$name','$price','$desc','$qty')");
//         $msg[] = "Product Added Sucessfully";
//     }
// }


// $row_number = mysqli_query($coon, "SELECT * FROM cart") or die("Failed to query");
// $row_num = mysqli_num_rows($row_number);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethio Games</title>
    <link rel="icon" href="../img/Logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<style>
    <?php include ASSETS . 'product.css' ?>
</style>


<style>
    <?php include ASSETS . 'swiper-bundle.min.css' ?>
</style>

<body>

    <header>

        <div class="nav container">
            <div class="nav container">
                <div class="logo">
                    <img src="<?php echo BURL . 'assets/images/LogoR.png'; ?>" width="100" alt="not found">
                    <a href="<?php echo url("home/index"); ?>" class="logo">Ethio<span>Games</span></a>
                </div>
                <div class="nav-icons">
                    <i class='bx bx-bell bx-tada' id="bell-icon"><span></span></i>
                    <i class='bx bxs-download'></i>
                    <div class="menu-icon">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                </div>

                <div class="menu">
                    <img src="#" alt="">
                    <div class="navbar">
                        <li><a href="<?php echo url("home/index"); ?>">Home</a></li>
                        <li><a href="<?php echo url("feedback/index"); ?>">Feedback</a></li>
                        <li><a href="<?php echo url("login/index"); ?>">Logout</a></li>
                    </div>
                </div>

                <div class="cart">
                    <a href="<?php echo url("cart/index"); ?>">Cart</a>
                    <span class="row-num"><?php echo htmlspecialchars($count); ?></span>
                </div>

                <div class="notification">
                    <div class="notification-box">
                        <i class='bx bxs-check-circle'></i>
                        <p>Congratulation, your game download successfully.</p>
                    </div>
                    <div class="notification-box">
                        <i class='bx bxs-x-circle'></i>
                        <p>Could not apply changes.</p>
                    </div>
                </div>
            </div>
    </header>

    <section class="new container margin-top" id="new">

        <?php
        if (isset($msg)) {
            foreach ($msg as $msgs) {
                echo '<div class="message">
                
                <span class="msg">' . $msgs . '</span> <span onclick ="this.parentElement.style.display=`none`;" class="nonee"> X </span>

                </div>
                ';
            }



        }

        ?>


        <?php if (isset($msg2)) { ?>


            <div class="confirmation">
                <div class="info">
                    <span class="msg">' . <?php echo $msg2  ?> . '</span>
                    <form action="<?php url("product/index") ?>" method="post">
                        <input type="submit" name="close" value="&times;"
                            onclick="this.parentElement.parentElement.parentElement.style.display=`none`;" class="nonee">
                        </inpu>
                    </form>
                    <p class="congrats">We Will Send A text Via Sms Stay Tuned!</p>
                </div>
            </div>

        <?php } ?>





        <div class="gamesearch flex">
            <div class="container flex">
                <form action="<?php url("product/index"); ?>" class="flex" method="post">
                    <input type="text" name="search_keyword" placeholder="keyword">

                    <button type="submit" name="search_submit">SEARCH</button>
                    <button type="submit" name="All">SEE ALL</button>
                </form>
            </div>
        </div>

        <div class="heading">


            <i class='bx bx-game'></i>
            <h2>Games</h2>
        </div>


        <div class="new-content">

            <?php
            $i = 0;
            $count = count($product);

            while ($i < $count) {
                $row = $product[$i]; ?>

                <form action="<?php url("product/add_to_cart"); ?>" class="new-content" method="post">

                    <div class=" box">
                        <img src="<?php echo BURL . $row['image_path']; ?>" width="50" alt="not found">
                        <div class="box-text">
                            <h2><?php echo $row['product_name'] ?></h2>
                            <h3><?php echo $row['product_desc'] ?></h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <span>$<?php echo $row['product_price'] ?></span>
                                </div>
                                <input type="submit" name="submit" value="Add to cart" class="btn_cart">
                            </div>
                        </div>

                        <input type="hidden" name="product_desc" value="<?php echo $row['product_desc'] ?>">
                        <input type="hidden" name="product_name" value="<?php echo $row['product_name'] ?>">
                        <input type="hidden" name="product_price" value="<?php echo $row['product_price'] ?>">
                    </div>

                </form>
                <?php $i++;
            } ?>
    </section>

    <section class="home container" id="home">
        <img src="<?php echo BURL . 'assets/images/hollow-knight.jpg'; ?>" width="100" alt="not found">
        <div class="home-text">
            <h1>SHADOW <br> Symphony</h1>
            <a href="#" class="btn">Available Now</a>
        </div>
    </section>

    <section class="trending container" id="trending">
        <div class="heading">
            <i class='bx bxs-flame'></i>
            <h2>Trending Games</h2>
        </div>

        <div class="trending-content swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="<?php echo BURL . 'assets/images/man_in_a_hood.jpg'; ?>" width="100" alt="not found">
                        <div class="box-text">
                            <h2>Whisper Blade</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="download.html" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="<?php echo BURL . 'assets/images/bear.jpg'; ?>" width="100" alt="not found">
                        <div class="box-text">
                            <h2>Emberfall Frontier</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="<?php echo BURL . 'assets/images/cyber predator.jpg'; ?>" width="100" alt="not found">
                        <div class="box-text">
                            <h2>Starfall Hunter</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="<?php echo BURL . 'assets/images/city.jpg'; ?>" width="100" alt="not found">
                        <div class="box-text">
                            <h2>Dragonkin Dynasty</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="<?php echo BURL . 'assets/images/Arse.jpg'; ?>" width="100" alt="not found">
                        <div class="box-text">
                            <h2>Dread Pirate</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 6 -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="<?php echo BURL . 'assets/images/samurai.webp'; ?>" width="100" alt="not found">
                        <div class="box-text">
                            <h2>Arcane Ascension</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 7 -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="<?php echo BURL . 'assets/images/ghostrunner.jpg'; ?>" width="100" alt="not found">
                        <div class="box-text">
                            <h2>Shadow Stalker</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 8 -->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="<?php echo BURL . 'assets/images/bloodborn.jpg'; ?>" width="100" alt="not found">
                        <div class="box-text">
                            <h2>Battle Bard</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="copyright container">
        <a href="#" class="logo">Ethio <span>Games</span></a>
        <p>&#169; Ethio Games All Right Reserved</p>
    </div>

    <script>
        <?php include ASSETS . 'js/swiper-bundle.min.js' ?>
    </script>


    <script>
        <?php include ASSETS . 'js/main.js' ?>
    </script>
</body>

</html>

<!-- 
<table class="Product-table">
    <thead>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Price</td>
            <td>Description</td>
            <td>Quantity</td>
            <td>Edit</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </thead>

    <tbody>



            <tr>
                <td><?php echo $i;
                $i++ ?></td>
                <td><?php echo $row['product_name'] ?></td>
                <td><?php echo $row['product_price'] ?></td>
                <td><?php echo $row['product_desc'] ?></td>
                <td><?php echo $row['product_quantity'] ?></td>
                <td><img src="<?php echo BURL . 'assets/images/LogoR.png' ?>" width="50"></td>
                <td><a href="<?php url("prodcut/edit/" . $row["ID"]) ?>">Edit</a></td>
                <td><a href="<?php url("prodcut/delete/" . $row["ID"]) ?>">Delete</a></td>
            </tr>

        </tbody>



</table> -->