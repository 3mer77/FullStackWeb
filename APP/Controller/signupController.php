<?php


class signupController
{

    public function index()
    {

        View::load("signup");
    }

    public function signup()
    {
        include CONFIG . "config2.php";

        $username = $_POST["username"];
        $FirtName = $_POST["fname"];
        $Lastname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["pass"];

        // Validate input (basic example)
        if (empty($username) || empty($password) || empty($email) || empty($FirtName) || empty($Lastname)) {
            echo "<script>alert('Please Fill Up all the Fields.');window.history.back()</script>";
            exit();
            // header("Location: index.php");

        } else {
            // Check if username already exists
            $checkUsernameQuery = "SELECT * FROM users_info WHERE username = ?";
            $stmt = $coon->prepare($checkUsernameQuery);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "<script>alert('Username already exists.');window.history.back()</script>";
                exit();
            } else {
                // Hash the password
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Insert data into database
                $sql = mysqli_query($coon, "INSERT INTO users_info (FirstName,LastName,username,email, passowrd,Role) VALUES ('$FirtName', '$Lastname','$username','$email','$hashedPassword','customer')");


                if ($sql) {
                    echo "<script>alert('Succesfully Registered');window.history.back()</script>";
                    exit();
                } else {
                    echo `Something Went Wrong !`;
                }
            }
        }
    }

}