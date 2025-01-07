<?php

class productController extends DBconnect
{


    public function index()
    {
        // $db = new Product();
        // $data['product'] = $db->getAllProucts();
        // $data['count'] = $db->getCartCount();


        // VIEW::load('product/index', $data);

        $db = new Product();

        // Check if the search form is submitted
        if (isset($_POST['search_submit'])) {
            $searchTerm = $_POST['search_keyword'];
            // Call the search method from Product model
            $data['product'] = $db->searchItem($searchTerm);
        } else  {
            // If no search term, display all products
            $data['product'] = $db->getAllProucts();
        }

        // Get the cart count
        $data['count'] = $db->getCartCount();
        

        // Load the view with the data
        VIEW::load('product/index', $data);
    }

    

    // public function add()
    // {
    //     VIEW::load('product/add');
    // }

    public function add_to_cart()
    {

        $msg = [];

        $conn = $this->connect();

        if (isset($_POST['submit'])) {

            $name = $_POST['product_name'];
            $desc = $_POST['product_desc'];
            $price = (int) $_POST['product_price'];
            $qty = 1;

            // include CONFIG . 'config2.php';
            // include CONFIG . 'config2.php';

            $select_cart = $conn->query("SELECT * from cart where product_name = '$name'");

            // if (mysqli_num_rows($select_cart) > 0) {
            //     echo "the product is already added to the cart";



            if ($select_cart->num_rows > 0) {


                $msg[] = "the product is already added to the cart";
                $db = new Product();
                $data['product'] = $db->getAllProucts();
                $data['msg'] = $msg;

                // $data['cartCount'] = $db->getCartCount();
                $data['count'] = $db->getCartCount();
                View::load("product/index", $data);
                $msg = [];


            } else  {

                $qry = "INSERT into cart(product_name,product_price,product_desc,qty)
                Values('$name',$price,'$desc',$qty)";

                $conn->query($qry);
                $msg[] = "Product Added Sucessfully";

                $db = new Product();
                $data['product'] = $db->getAllProucts();
                $data['msg'] = $msg;
                $data['count'] = $db->getCartCount();

                View::load("product/index", $data);
                $msg = [];
            }

        }
    }




    // mysqli_query($this->$coon->connect(), $qry);



}
