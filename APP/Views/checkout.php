<?php include VIEWS . "inc/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    <?php include ASSETS . "checkout.css"; ?>
</style>

<body>



    <div class="container">

        <section class="checkout-form">

          

            <form action="<?php url("checkout/placeOrder"); ?>" method="post">
                <h1 class="heading">Complete Your Order</h1>
                <div class="flex">
                    <div class="inputBox">
                        <span>Your Username</span>
                        <input type="text" name="name" required value="<?php echo $username ?>" readonly>
                    </div>
                    <div class="inputBox">
                        <span>Your Phone Number</span>
                        <input type="number" placeholder="enter your number" name="number" required>
                    </div>
                    <div class="inputBox">
                        <span>Payment method</span>
                        <select name="method">
                            <option value="cash on delivery" selected>cash on devlivery</option>
                            <option value="credit cart">credit cart</option>
                        </select>
                    </div>
                    <div class="inputBox">
                        <span> You Address</span>
                        <input type="text" placeholder="e.g. house no." name="address" required>
                    </div>

                </div>
                <input type="submit" value="order now" name="order_btn" class="btn3">
            </form>

        </section>

    </div>


    <?php include VIEWS . "inc/footer.php"; ?>