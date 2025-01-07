<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>

    <style>
        <?php include ASSETS . 'product.css' ?>
    </style>

    <style>
        <?php include ASSETS . 'swiper-bundle.min.css' ?>
    </style>

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
                        <li><a href="<?php echo url("logout/index"); ?>">Logout</a></li>
                    </div>
                </div>

                <!-- <div class="cart">
                    <a href="<?php echo url("cart/index"); ?>">Cart</a>
                    <span class="row-num"><?php echo $row_num ?></span>
                </div> -->

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



    <h1 class="cart-header">Cart Page</h1>
    <table class="Product-table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Price</td>
                <td>Description</td>
                <td>Quantity</td>
                <td>subtotal</td>
                <td>Delete</td>
            </tr>
        </thead>

        <tbody>
            <?php
            $i = 0;
            $count = count($product);
            $grandTotal = 0;

            while ($i < $count) {
                $row = $product[$i]; ?>

                <tr>
                    <td><?php echo $i + 1 ?></td>
                    <td><?php echo $row['product_name'] ?></td>
                    <td>$<?php echo number_format($row['product_price']) ?></td>
                    <td><?php echo $row['product_desc'] ?></td>
                    <td>
                        <form action="<?php url("cart/update") ?>" method="post">
                            <input type="hidden" name="item_id" value="<?php echo $row['ID'] ?>">
                            <input type="number" min="1" name="update_qty" value="<?php echo $row['qty'] ?>">
                            <input type="submit" name="update_btn" value="Edit">
                        </form>
                    </td>
                    <td>$<?php echo $subtotal = $row['product_price'] * $row['qty'] ?></td>
                    <td>
                        <form action="<?php url("cart/remove") ?>" method="post">
                            <input type="hidden" name="item_id" value="<?php echo $row['ID'] ?>">
                            <input onclick="return confirm('Remove Item from Cart')" type="submit" name="remove_btn"
                                id="delete" value="remove">
                        </form>
                    </td>
                </tr>

                <!-- <a href="<?php echo url("cart/remove") ?>?remove=<?php echo $row['ID']; ?>"
                    onclick="return confirm('Remove Item from Cart')" class="delete"></a> -->
                <?php
                $grandTotal += $subtotal;
                $i++;
            } ?>

            <tr class="t-bottom">
                <td>
                    <a href="<?php echo url("product/index") ?>" class="conShopping">Continue Shopping</a>

                </td>
                <td colspan="4">Grand-Total</td>
                <td>$<?php echo number_format($grandTotal) ?></td>
                <td>
                    <form action="<?php url("cart/deleteAll") ?>" method="post">
                        <input type="hidden" name="item_id" value="<?php echo $row['ID'] ?>">
                        <input id="delete" onclick="return confirm('Delete All from Cart?')" type="submit"
                            name="delete_btn" value="Delete All">
                    </form>
                </td>
            </tr>


        </tbody>




    </table>



    <div class="checkout">
        <a href="<?php echo url("checkout/page") ?>" class="btn1 <?= ($grandTotal > 1) ? '' : 'disabled'; ?>">Proceed To
            CheckOut</a>
    </div>


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