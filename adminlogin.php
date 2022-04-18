<?php

include("adminconn.php");

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")

$admin_username=mysqli_real_escape_string($con,$_POST['Admin_username']);
$password=mysqli_real_escape_string($con,$_POST['Admin_password']);

$sql="SELECT id FROM admin_info WHERE Admin_username='$admin_username' and Admin_password='$password'";

if($result=mysqli_query($con,$sql)){
    $rowcount=mysqli_num_rows($result);
}
    if($rowcount==1){
        session_start();
        $_SESSION['Admin_username']=$admin_username;
        header("location: addproduct.html");
        }
        else{
            echo'<script>alert("Unsuccessful Login, try again");
            window.location.href ="adminlogin.html";
            </script>';
            // // $error=printf("Your Login Name or Password is invalid. Please re login<br/><br/>");
        }
    mysqli_close($con);
?>



