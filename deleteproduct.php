<?php

include("addproductconn.php");

if(ISSET($_GET['id'])){
    $Id =($_GET['id']);
    mysqli_query($connection,"DELETE FROM product_info WHERE Id='$Id'");
    header("Location: viewproduct.php");
}else{
    echo "Failed to delete bc no id";

}
mysqli_close($connection);//close database

?>