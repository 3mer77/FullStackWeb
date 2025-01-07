<?php

class CheckoutController
{

    public function page()
    {

        session_start();

        if (isset($_SESSION['username'])) {
            // Retrieve the username from session if logged in
            $username = $_SESSION['username'];


            // You can prepare additional data for the view
            $data['username'] = $username;

            // Pass data to the view
            VIEW::load("checkout", $data);
        }
    }

    public function close () {

        if(isset($_POST['close'])) {

            $db = new Product();
            $data['count'] = $db->getCartCount();
            $data['product'] = $db->getAllProucts();
    
            // // Redirect to the order confirmation page
            View::load('product/index', $data);

        }

        
    }

    public function placeOrder()
    {
        $username = $_POST['name'];

        $shippingAddress = $_POST['address'];
        $paymentMethod = $_POST['method'];
        $number = $_POST['number'];

        $db = new Product();

        // Get the cart products
        $cartProducts = $db->getAllCartProduct();


        $totalPrice = $db->getCartTotal();

        // Create the order
        $db->createOrder($username, $totalPrice, $cartProducts, $shippingAddress, $paymentMethod, $number);
        $msg2 = "Thankyou For Shopping with Us"; 

        // Clear the cart after placing the order
        $db->clearCart();

        // passing data to view
        $data['count'] = $db->getCartCount();
        $data['product'] = $db->getAllProucts();
        $data['msg2'] = $msg2;

        // // Redirect to the order confirmation page
        View::load('product/index', $data);
        exit();
    }
}