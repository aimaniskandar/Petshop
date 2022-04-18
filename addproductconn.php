<?php
$connection = mysqli_connect("localhost","root","","product_database");

if(mysqli_connect_errno())
    {
    echo "Failed to connect to Admin Database".mysqli_connect_error();
    }

?>