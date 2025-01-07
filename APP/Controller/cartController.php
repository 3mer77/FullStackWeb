<?php


class CartController extends DBconnect
{



    public function index()
    {
        $db = new Product();
        $data['product'] = $db->getAllCartProduct();

        View::load("product/cart", $data);
    }

    // public function add()
    // {

    // }



    public function update()
    {



        if (isset($_POST['update_btn'])) {

            $coon = $this->connect();


            $qty = $_POST['update_qty'];
            $item_id = $_POST['item_id'];

            $upadate_qty_query = "UPDATE cart SET qty = $qty where ID = $item_id";

            $action_query = $coon ->query($upadate_qty_query); ;

            if ($action_query) {

                $db = new Product();
                $data['product'] = $db->getAllCartProduct();
                View::load("product/cart", $data);

            }

        }
    }

    public function remove()
    {

        if (isset($_POST['remove_btn'])) {
            $coon = $this->connect();
            $item_id = $_POST['item_id'];

            $rmove_query = "DELETE from cart where ID = $item_id ";

            $action_query = mysqli_query($coon, $rmove_query);

            if ($action_query) {
                $db = new Product();
                $data['product'] = $db->getAllCartProduct();
                View::load("product/cart", $data);
            }

        }

    }

    public function deleteAll()
    {


        if (isset($_POST["delete_btn"])) {


            $coon = $this->connect();


            $rmove_query = "DELETE from cart ";

            $action_query = mysqli_query($coon, $rmove_query);

            if ($action_query) {
                $db = new Product();
                $data['product'] = $db->getAllCartProduct();
                View::load("product/cart", $data);
            }
        }
    }
}