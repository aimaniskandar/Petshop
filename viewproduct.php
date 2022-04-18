<html>
<head>
	<link href="viewproduct.css" rel="stylesheet">
</head>
<body>
	<div style="width:50%; float: left">
		<a href="addproduct.html"><button class="button" style="margin-bottom:10px; float: right" >Add New Products</button></a>
	</div>
<form action="">
<div class="parentbox">
	<div style="width:50%; float: left">
		<form method="post">
			<input type="text" style="width: 250px; padding: 8px; margin: 3px 0 11px 0; display: inline-block; font-size:12pt;" name="search_key" placeholder="Enter product name"> 
			<button class="button" name="searchBtn" type="submit">Submit</button>
		</form>
	</div>
</form>


</div>
<?php
include("addproductconn.php");

$search_key = "";

if(isset($_POST['searchBtn'])){
	$search_key = $_POST['search_key'];
}

$result=mysqli_query($connection,"SELECT * FROM product_info WHERE Product_Name LIKE '%$search_key%' ORDER BY Id");
?>
<div class="parentbox">
<?php 
	while($row=mysqli_fetch_array($result)){
		
		$data = '<div class="childbox">
		<h3>'.$row['Product_Name'].'</h3>
		
		Product Price:<br>'.$row['Product_Price'].'<br><br>
        
		Category:<br>'.$row['Type'].'<br><br>
        
		<a class="edit" href="editproduct.php?id='.$row['Id'].'">Edit</a> 
		<a class="delete" onclick="return confirm(\'Delete '.$row['Product_Name'].' record?\');" href="deleteproduct.php?id='.$row['Id'].'">Delete</a> 
		
		</div>
		';
		echo $data;
		
		} 
		mysqli_close($connection);//to close the database connection
?>
</div>
</body>
</html>