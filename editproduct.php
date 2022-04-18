<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product page</title>

    <style>
        .label {
            float:left;
            width:120px;
        }
    </style>
</head>
<body>
<?php

include("addproductconn.php");
    $id=intval($_GET['id']); //intval—Get the integer value of a variable
    $result=mysqli_query($connection,"SELECT * FROM product_info WHERE Id='$id'");
    while($row=mysqli_fetch_array($result)){
?>

<form action = "update.php" method = "POST">
        <input type = "hidden" name = "id" value = "<?php echo $row['Id'] ?>">
        <div class = "label">Product Name: </div>
        <input type = "text" name = "name" required = "required" value = "<?php echo $row['Product_Name'] ?>">
        <br><br>
        <div class = "label">Product Price: </div>
        <input type = "text" name = "number" required = "required" value="<?php echo $row['Product_Price'] ?>">
        <br><br>
        <div class = "label"> Categories: </div>
        <input type = "text" name = "type" required = "required" value="<?php echo $row['Type'] ?>">
        <br><br>
        <button type = "submit" class = "btn" name = "update_btn">Update</button>
    </form>
<?php
    }
    mysqli_close($connection);//close database
?>
</body>
</html>
