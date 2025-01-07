<?php


class HomeController extends DBconnect
{



    public function index()
    {


        session_start();  // Start the session at the beginning

        if (isset($_SESSION['username'])) {
            // Retrieve the username from session if logged in
            $username = $_SESSION['username'];


            // You can prepare additional data for the view
            $data['username'] = $username;

            // Pass data to the view
            VIEW::load("home", $data);

            // $data['Content'] = "Content of home page"; 
            // VIEW::load("home");

        }
    }
    public function page()
    {


        $coon = $this->connect();

        $username = $_POST['username'];
        $password = $_POST['pass'];

        if (empty($username) || empty($password)) {
            echo "<script>alert('Please Fill Up all the Fields.');window.history.back()</script>";
            exit();

        }

        $sql = "SELECT * FROM users_info WHERE username = '$username'";
        $result = $coon->query($sql);

        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row['passowrd'])) {


                if ($row['Role'] == "customer") {
                    session_start();

                    $_SESSION['username'] = $username;

                    $data = [
                        'username' => $row['username'],
                        'pass' => $row['passowrd'],
                    ];

                    VIEW::load('home', $data);

                } else {

                    echo "Admin page";

                }


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