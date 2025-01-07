<?php

class Product extends Db
{

    private $table = "products";

    private $orderTable = '`order`';
    private $Carttable = "cart";
    public $conn;

    public function __construct()
    {

        $this->conn = $this->connect();

    }

    public function getAllProucts()
    {

        return $this->conn->get($this->table);
    }

    public function getAllCartProduct()
    {

        return $this->conn->get($this->Carttable);

    }

    public function getCartCount()
    {

        // Execute a query to count the rows in the cart table
        $result = $this->conn->query("SELECT COUNT(*) AS cart_count FROM cart");

        // Check if the query was successful
        if ($result) {
            // If the result is an object (mysqli_result), fetch the associative array
            if (is_object($result)) {
                $row = $result->fetch_assoc();
                return $row['cart_count'];
            }
            // If the result is an array, return the count directly
            else if (is_array($result)) {
                return $result[0]['cart_count'];  // Assuming it's an array with the count in the first element
            }
        }

        // If the query fails or no results found, return 0 or an error message
        return "Error in query execution: ";
    }

    public function searchItem($searchTerm)
    {
        // Escape the search term to prevent SQL injection

        $searchTerm = "%" . $searchTerm . "%";

        // Use the 'where' and 'orWhere' methods of MysqliDb to filter the query
        $this->conn->where("product_name", $searchTerm, "LIKE");
        $this->conn->orWhere("product_desc", $searchTerm, "LIKE");

        // Get the results from the 'products' table
        $results = $this->conn->get($this->table); // This returns an array of matching products

        return $results; //

    }

    public function createOrder($username, $totalPrice, $cartProducts, $shippingAddress, $paymentMethod,$number)
{
    // Prepare product details as a JSON object
    $productDetails = [];
    foreach ($cartProducts as $product) {
        $productDetails[] = [
            'product_name' => $product['product_name'],
            'quantity' => $product['qty'],
        ];
    }

    // Convert the product details array to JSON
    $productDetailsJson = json_encode($productDetails);

    // Insert order data into the database
    $data = [
        'username' => $username,
        'address' => $shippingAddress,
        'Phone_number' => $number,
        'products' => $productDetailsJson,
        'method' => $paymentMethod,
        'total_price' => $totalPrice,
    ];

    $this->conn->insert($this->orderTable, $data);
}

public function getCartTotal()
{
    // Retrieve all products in the cart
    $cartItems = $this->conn->get('cart');

    $total = 0;

    // Calculate the total price
    foreach ($cartItems as $item) {
        $total += $item['product_price'] * $item['qty'];
    }

    return $total;
}

    public function clearCart()
    {
        $this->conn->delete('cart');
    }
}