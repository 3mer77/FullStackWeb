<?php

class FeedbackController
{
    public function index()
    {

        session_start();

        if (isset($_SESSION['username'])) {
            // Retrieve the username from session if logged in
            $username = $_SESSION['username'];

            
            // You can prepare additional data for the view
            $data['username'] = $username;

            // Pass data to the view
            VIEW::load("feedback", $data);

        // View::load("feedback");
    }
    }
    public function send()
    {

        include CONFIG . "config2.php";
        
        // Capture form data
        $name = mysqli_real_escape_string($coon, $_POST["name"]);
        $msg = mysqli_real_escape_string($coon, $_POST["feedback"]);
        
        // Validate input
        if (empty($name) ||empty($msg)) {
            echo "<script>alert('Please Fill Up all the Fields.');window.history.back()</script>";
        } else {
            // Insert into the database
            $sql = mysqli_query($coon, "INSERT INTO feedback (Name,feedback) VALUES ('$name', '$msg')");
        
            // Check if query executed successfully
            if ($sql) {
                echo "<script>alert('Successfully Registered');window.history.back()</script>";
                exit();
            } else {
                echo "Error: " . mysqli_error($coon);
            }
        }
        
        // Close connection
        $coon->close();
    }
}
        
    
