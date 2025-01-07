<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="header">
        <img src="<?php echo BURL . 'assets/images/LogoR.png'; ?>" width="100" alt="not found">
        <h1>Ethio Store</h1>
    </div>


    <style>
        <?php include ASSETS . "login.css"; ?>
    </style>

    
    <form action="<?php url("signup/signup") ?>" method="post" class="form">



        <div class="container">
            <div class="field">
                <label for="">FirstName</label> <br>
                <input type="text" name="fname">
            </div>

            <div class="field">
                <label for="">LastName</label> <br>
                <input type="text" name="lname">
            </div>

            <div class="field">
                <label for="">Username</label> <br>
                <input type="text" name="username">
            </div>

            <div class="field">
                <label for="">Email</label> <br>
                <input type="text" name="email">
            </div>

            <div class="field">
                <label for="">Password</label> <br>
                <input type="text" name="pass">
            </div>
        </div>


        <input type="submit" name="submit" value="Sign Up" class="signUp_btn">
        <a href="<?php url("login/index") ?>">Already Have an account ?</a>



    </form>
</body>

</html>