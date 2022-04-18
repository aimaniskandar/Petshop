<?php
    include "cartconn.php";
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart Page</title>
    <link rel="stylesheet" href="">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

    body {
        background-image:/product/table_pic.jpeg;
        font-family: "Montserrat", sans-serif;
        color:black;
    }
    .cart-container{
        display:block;
        width:90%;
    
    }

    .tittle{
        font-size:40px;
        margin-bottom:10px;
        margin-left:25px;
        text-transform:uppercase;
    }

    .content_table{
        border-collapse:collapse;
        margin:25px;
        font-size:15px;
        min-width:400px;
        border:solid 2px;
    }
    .quantity,.price,.total,.total2{
        text-align:center;
        padding:12px 15px;
        border-bottom:1.2px solid #dddddd;

    }

    .product{
        border-bottom:1.2px solid #dddddd;
        
    }
    .total2{
        text-align:center;
        
    }

    .thead{
        background-color:#24252A;
        color: #fff;
        font-weight: bold;
        height:65px;
        text-transform: uppercase;
        
    }
    .remove{
        text-decoration:none;
        color: blue;
        padding-left: 60px;
    }
    .back{
        margin-left:25px;
        text-decoration:none;
    }
    .back:hover{
        color:dodgerblue;
        text-decoration:underline;
    }

</style>
<body>
    <a class="back" href="Customer_product.php"><h2 class="back">Go back</h2></a>
    <h4 class="tittle">Shopping cart</h4>

    <div class = "cart-container">
        <table class="content_table">  
            <tr>
                <thead class="thead">
                    <th width="0%">Product Name</th>  
                    <th width="30%">Quantity</th>  
                    <th width="20%">Price</th>  
                    <th width="20%">Total</th>  
                    <th width="20%"></th>  
                </thead>
            </tr>

            <?php
                
                if(!empty($_SESSION["myCart"])) {  
                    $total = 0;  
                    foreach($_SESSION["myCart"] as $elements => $values) {
            ?>  
                        <tr>  
                            <td class="product"><?php echo $values["product_name"] ?></td>
                            <td class="quantity"><?php echo $values["product_quantity"] ?></td>
                            <td class="price">RM <?php echo $values["product_price"] ?></td> 
                            <td class="total">RM <?php echo number_format($values["product_quantity"] * $values["product_price"], 2) ?></td>  
                            <td><a href="cartconn.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="remove">Remove</span></a></td>
                            <td class = "remove_col"><a href = 'cust_order_remove.php?id=<?php echo $values['product_id']?>'>
                                <span><i class="fas fa-minus-circle"></i></span></a>
                            </td> 
                            
                        </tr>
            <?php 
                    $total = $total + ($values["product_quantity"] * $values["product_price"]);
                    }
            ?>

            <tr> 
                <td colspan = "3" align = 'right'>Total</td> 
                <td class="total2">RM <?php echo number_format($total, 2); ?></td> 
                
                <td class="payment"><a href="payment.php">Checkout</a></td>
            </tr>
            <?php
                }
                else {
                    echo "<script>alert('Your cart is empty');
                    window.location.href = 'Customer_product.php'</script>";
                } 
            ?>

        </table>
            </div>

</body>
</html>