<?php


class DBconnect
{
    private $host;
    private $username;
    private $pass;
    private $dbname;

    public function __construct()
    {
        $this->host = "localhost";
        $this->username = "root";
        $this->pass = "";
        $this->dbname = "mvc";


    }

    public function connect()
    {
        $conn = new mysqli($this->host, $this->username, $this->pass, $this->dbname);

        if ($conn->connect_error) {
            die("database failed to connect!!" . $conn->connect_error);

        } else {

            return $conn;
        }
    }


}




// $coon = mysqli_connect("localhost","root","","mvc");
