<?php 
    if (isset($_POST["update_btn"])) {
        include("addproductconn.php");

        $name = $_POST['name'];
        $price = $_POST['number'];
        $type = $_POST['type'];
        $id = $_POST['id'];

        $dsl = "UPDATE product_info SET Product_Name='$name',Product_Price ='$price',Type ='$type' WHERE Id ='$id'";

        if (mysqli_query($connection, $dsl)) {
            mysqli_close($connection);
            
            echo "<script>alert('Record updated!');
            window.location.href = 'viewproduct.php';
            </script>";
        }
    }
?>