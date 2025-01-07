<?php

include CONFIG . "config2.php";

class Products extends DBconnect {

    private $table = "products";
    private $Carttable = "cart";
    public $conn;

    public function __construct()
    {

        $this->conn = $this->connect();

    }

    public function getAllProucts()
    {

        $sql = "Select * from". $this->table;

        $result = $this->conn->query($this->$sql); // Returns an array of products

        // If there are no products found, return an empty array
        if ($result === false) {
            return []; // Return an empty array if there is an error or no products found
        }

        return $result;

    
    }

}