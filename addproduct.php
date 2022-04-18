<?php
    include("addproductconn.php");
    
    $add="INSERT INTO product_info (Product_Name, Product_Price)

    VALUES 
    ('$_POST[Product_name]','$_POST[Product_price]')";

    if (!mysqli_query($connection,$add)){
        die('Error:'.mysqli_error($connection));
    }
    else{

        echo'<script>alert("Succesful to add product");
        window.location.href ="addproduct.html";
        </script>';
    }
    mysqli_close($connection);

?>
    

