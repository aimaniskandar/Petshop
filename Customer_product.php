<?php
    session_start();

    $link = mysqli_connect("localhost","root","","product_database");

if(mysqli_connect_errno())
    {
    echo "Failed to connect to Product Database".mysqli_connect_error();
    }
    ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
    <link rel="stylesheet" href="beautify.css">
</head>

<style>
    .Home_icon{
        margin-right: auto;
    }
</style>

<body>
    <header>
        <a href="MainHomepage.php" class="Home_icon"><img src="products/Sigmapets.jpeg" alt="logo" width="100px" height="100px"></a>
        <!-- <img class="logo1" src="products/Sigmapets.jpeg" alt="sigmapets_logo" href="#"> -->
        <nav>
            <ul class="navbar">
                <li><a href="aboutus.html" class="navitem">About Us</a></li>
                <?php
                    if (!isset($_SESSION['mySession'])){
                        echo"<li><a href='login.html' class='navitem'>SignUp | Login</a></li>";
                    }
                    else {
                        echo "<li><a href='logout.php' class='navitem'>Logout</a></li>";
                    }
                ?>
                <li><a href="#" class="navitem">Products</a></li>
                <?php
                    if (isset($_SESSION['mySession'])){
                        echo "<li><a href='cart.php' class='navitem' >CART<img src='products/shopping-cart.png' style='width:25px;height: 18px;'>
                        </a></li>";
                        }
                ?>
            </ul>
        </nav>
    </header>
    
    
    <div class="Display_tittle">
        <h4>PET <span>FOODS</span></h4>
    </div>
    <div class="container">
        <?php 
        $args = "Select * from product_info Where type=1"; 
        $result = mysqli_query($link,$args);
        ?>
        <?php while($row = mysqli_fetch_assoc($result)) {?>
        <div class="card">
            <img class="card_image" src="<?php echo 'products/' . $row ['Id'] .".jpeg"; ?>"/>
            <h2 class="tittle"><?php echo $row['Product_Name'];?></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestias, autem fugit porro aliquam quaerat perferendis iusto odio accusantium vero.</p>
            <form method="post" action="cartconn.php?action=add&id=<?php echo $row['Id'];?>"><button type="submit" class="Addcart" name="addCart">Add To Cart</button>
            <input type="text" name="quantity" class="quantity" placeholder="Enter a Quantity">
            <input type="hidden" name="hiddenName" value="<?php echo $row['Product_Name'];?>">
            <input type="hidden" name="hiddenPrice" value="<?php echo $row['Product_Price'];?>">
            </form>
        </div>
        <?php }?>
    
    <!-- FIRST PRODUCT -->
    <div class="Display_tittle">
        <h4><span>SMALL</span> ANIMALS</h4>
    </div>
        <?php 
            $args2 = "Select * from product_info Where type=2"; 
            $result2 = mysqli_query($link,$args2);
            ?>
            <?php while($row = mysqli_fetch_assoc($result2)) {?>
            <div class="card">
                <img class="card_image" src="<?php echo 'products/' . $row ['Id'] .".jpeg"; ?>"/>
                <h2 class="tittle"><?php echo $row['Product_Name'];?></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestias, autem fugit porro aliquam quaerat perferendis iusto odio accusantium vero.</p>
                <form method="post" action="cartconn.php?action=add&id=<?php echo $row['Id'];?>"><button type="submit" class="Addcart" name="addCart">Add To Cart</button>
                <input type="text" name="quantity" class="quantity" placeholder="Enter a Quantity">
                <input type="hidden" name="hiddenName" value="<?php echo $row['Product_Name'];?>">
                <input type="hidden" name="hiddenPrice" value="<?php echo $row['Product_Price'];?>">
                </form>
            </div>
            <?php }?>
        

            <!-- Second product -->
            <div class="Display_tittle">
                <h4><span>LITTERBOX </span>+ ACCESORIES</h4>
            </div>
            <?php 
                $args3 = "Select * from product_info Where type=3"; 
                $result3 = mysqli_query($link,$args3);
                ?>
                <?php while($row = mysqli_fetch_assoc($result3)) {?>
                <div class="card">
                    <img class="card_image" src="<?php echo 'products/' . $row ['Id'] .".jpeg"; ?>"/>
                    <h2 class="tittle"><?php echo $row['Product_Name'];?></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestias, autem fugit porro aliquam quaerat perferendis iusto odio accusantium vero.</p>
                    <form method="post" action="cartconn.php?action=add&id=<?php echo $row['Id'];?>"><button type="submit" class="Addcart" name="addCart">Add To Cart</button>
                    <input type="text" name="quantity" class="quantity" placeholder="Enter a Quantity">
                    <input type="hidden" name="hiddenName" value="<?php echo $row['Product_Name'];?>">
                    <input type="hidden" name="hiddenPrice" value="<?php echo $row['Product_Price'];?>">
                    </form>
                </div>
                <?php }?>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer_info">
            <h3>SIGMA PETS</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto recusandae laboriosam iste, facilis enim quae?</p>
            <ul class="socials">
                <li><a href="https://www.w3schools.com/html/html_filepaths.asp"><img border="0" alt="Facebook logo" src="Socials/facebook.png" width="30" height="30">
                </a></li>
                <li><a href="https://www.instagram.com"><img border="0" alt="Facebook logo" src="Socials/instagram.png" width="30" height="30">
                </a></li>
                <li><a href="https://twitter.com"><img border="0" alt="Facebook logo" src="Socials/twitter.png" width="30" height="30">
                </a></li>
                <li><a href="https://web.whatsapp.com"><img border="0" alt="Facebook logo" src="Socials/whatsapp.png" width="30" height="30">
                </a></li>
                <li><a href="https://www.youtube.com/watch?v=G3Sg-15VE4o"><img border="0" alt="Facebook logo" src="Socials/youtube.png" width="30" height="30">
                </a></li>
            </ul>
        </div>
        <div class="footer_bot">
            <p>copyright 2021 &copy;SIGMA PETS. designed by <span>Aiman</span><p>
        </div>
        
        </footer>
</body>
</html>