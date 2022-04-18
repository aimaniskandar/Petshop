<?php

include("conn.php");

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")

$username_email=mysqli_real_escape_string($con,$_POST['Username_or_email']);
$password=mysqli_real_escape_string($con,$_POST['User_password']);

$sql="SELECT id FROM registration WHERE Username='$username_email' and User_password='$password'";

if($result=mysqli_query($con,$sql)){
    $rowcount=mysqli_num_rows($result);
}
    if($rowcount==1){
        session_start();
        $_SESSION['mySession']=$username_email;
        header("location: MainHomepage.php");
        }
        else{
            echo'<script>alert("Unsuccessful Login, try again");
            window.location.href ="login.html";
            </script>';
        }
    mysqli_close($con);
?>

