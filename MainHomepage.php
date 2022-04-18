<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop</title>
    <link rel="stylesheet" href="beautify.css">
    
</head>
<body>

    <header>
        <img class="logo1" src="products/Sigmapets.jpeg" alt="sigmapets_logo" href="#">
        
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

                <li><a href="Customer_product.php" class="navitem">Products</a></li>
                <?php
                if (isset($_SESSION['mySession'])){
                    echo "<li><a href='cart.php' class='navitem' >CART<img src='products/shopping-cart.png' style='width:25px;height: 18px;'>
                    </a></li>";
                    }
                ?>
            </ul>
        </nav>
    </header>

    <section>
        

        <div>
            <img class="logo2" src="products/homepagepic.webp" alt="picture">
        </div>

        <div class="box1">
            <h4>STORE PICKS</h4>
        </div>

        <div class="container">
            <div class="card">
                <img class="card_image" src="products/1.jpeg" alt="cat food">
                <h2 class="tittle">ROYAL CANIN</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestias, autem fugit porro aliquam quaerat perferendis iusto odio accusantium vero.</p>
                <a Class="Addcart" href="">Add To Cart</a>
            </div>

            <div class="card">
                <img class="card_image" src="products/3.jpeg" alt="cat food">
                <h2 class="tittle">MAZURI</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestias, autem fugit porro aliquam quaerat perferendis iusto odio accusantium vero.</p>
                <a Class="Addcart" href="">Add To Cart</a>
            </div>

            <div class="card">
                <img class="card_image" src="products/5.jpeg" alt="cat food">
                <h2 class="tittle">DOG TREAT</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestias, autem fugit porro aliquam quaerat perferendis iusto odio accusantium vero.</p>
                <a Class="Addcart" href="">Add To Cart</a>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

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
                <li><a href="https://youtu.be/dQw4w9WgXcQ"><img border="0" alt="Facebook logo" src="Socials/youtube.png" width="30" height="30">
                </a></li>
            </ul>
        </div>
        <div class="footer_bot">
            <p>copyright 2021 &copy;SIGMA PETS. designed by <span>Aiman</span><p>
        </div>
        </footer>
</body>
</html>