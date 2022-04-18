<?php

include("conn.php");

$sql="INSERT INTO registration (Username, Email_Address, House_Address, DOB, Phone_Number, User_password)

VALUES 
('$_POST[Username]','$_POST[Email_Address]','$_POST[House_Address]','$_POST[DOB]','$_POST[Number]','$_POST[User_password]')";

if (!mysqli_query($con,$sql)){
    die('Error:'.mysqli_error($con));
}
else{

    echo'<script>alert("Registration Successful, Please login");
    window.location.href ="login.html";
    </script>';
}
mysqli_close($con);
?>