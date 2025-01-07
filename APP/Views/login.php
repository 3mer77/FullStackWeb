<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php include ASSETS . "login.css"; ?>">
</head>

<body>

    <style>
        <?php include ASSETS . "login.css"; ?>
    </style>


    <div class="header">
        <img src="<?php echo BURL . 'assets/images/LogoR.png'; ?>" width="100" alt="not found">
        <h1>Ethio Store</h1>
    </div>

    <form action="<?php url("home/page") ?>" method="post" class="form">


        <div class="container">

            <div class="field">
                <label for="">Username</label> <br>
                <input type="text" name="username">
            </div>


            <div class="field">
                <label for="">Password</label> <br>
                <input type="text" name="pass">
            </div>
        </div>


        <input type="submit" name="login" value="Login" class="signUp_btn">
        <a href="<?php url("signup/index") ?>">Don't Have an Account ?</a>



    </form>


</body>

</html>