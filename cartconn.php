<?php

session_start();

if (isset($_POST['addCart'])) { //if add to cart button is clicked
    if (isset($_SESSION['myCart'])) { // if cart is exsiting
        $order_array_id = array_column($_SESSION['myCart'], "product_id");

        if (!in_array($_GET["id"], $order_array_id)) { //if product is not in cart
            $count = count($_SESSION['myCart']); //create an index 
            $order_array = array( //continue to insert product in the array
                "product_id" => $_GET['id'],
                "product_name" => $_POST['hiddenName'],
                "product_price" => $_POST['hiddenPrice'],
                "product_quantity" => $_POST["quantity"]
            );
            $_SESSION['myCart'] [$count] = $order_array; //include the index from each items in the array to the cart
            echo "<script>window.location.href = 'Customer_product.php';</script>";
        }
        else { //if product is existed in cart
            echo "<script>alert('This order is already placed in the cart');
            window.location.href = 'Customer_product.php';</script>";
        }
    }
    else { //if no cart is existed
        $order_array = array( // create an array
            "product_id" => $_GET['id'],
            "product_name" => $_POST['hiddenName'],
            "product_price" => $_POST['hiddenPrice'],
            "product_quantity" => $_POST["quantity"]
        );
        $_SESSION['myCart'] [0] = $order_array; //first product in cart
        echo "<script>window.location.href = 'Customer_product.php';</script>";
    }

}
if(isset($_GET["action"]))  
{  
    if($_GET["action"] == "delete")  
    {  
        foreach($_SESSION["myCart"] as $keys => $values)  
        {  
            if($values["product_id"] == $_GET["id"])  
            {  
                unset($_SESSION["myCart"][$keys]);  
                echo '<script>alert("Item Removed")</script>';  
                echo '<script>window.location="cart.php"</script>';  
            }  
        }  
    }
}
?>
