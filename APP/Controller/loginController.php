<?php



class loginController
{

    public function index()
    {
        session_start();

        // Clear all session variables
        $_SESSION = [];

        // Destroy the session
        session_destroy();

        //Clear Cart

        $db = new Product();
        $db->clearCart();

        // Redirect to the login page
        VIEW::load("Login");
        exit();

    }

    public function check()
    {
        include CONFIG . "config2.php";

        $username = $_POST['username'];
        $password = $_POST['pass'];

        if (empty($username) || empty($password)) {
            echo "<script>alert('Please Fill Up all the Fields.');window.history.back()</script>";
            exit();

        }

        $sql = "SELECT * FROM users_info WHERE username = '$username'";
        $result = mysqli_query($coon, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row['passowrd'])) {

                session_start();

                $_SESSION['username'] = $username;

                $data = [
                    'username' => $row['username'],
                ];

                VIEW::load('home', $data);


                exit();
            } else {

                echo "<script>alert('Invalid UserName or password ');window.history.back()</script>";
                exit();
            }
        } else {

            echo "<script>alert('Invalid UserName or password ');window.history.back()</script>";
            exit();
        }
    }
}