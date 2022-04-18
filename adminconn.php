<?php
//data connection
$con = mysqli_connect("localhost","root","","admin");

if(mysqli_connect_errno())
    {
    echo "Failed to connect to Admin Database".mysqli_connect_error();
    }