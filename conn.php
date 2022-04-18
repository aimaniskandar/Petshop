<!-- //connection to customer register database -->
<?php
//data connection
$con = mysqli_connect("localhost","root","","signup");

if(mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL".mysqli_connect_error();
    }

?>