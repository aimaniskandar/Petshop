<?php
    include("cartconn.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment page</title>
    <link rel="stylesheet" href="payment.css">
</head>

<body>
    <div class="container">
        <!-- FIRST ROW -->
        <h1>Confirm your payment</h1>
        <div class="first_row">
            <div class="Card_name">
                <h3>Card Holder's Name</h3>
                <div class="input">
                    <input type="text">
                </div>
            </div>
        </div>
    
            <div class="cvv">
                <h3>cvv</h3>
                <div class="input" placeholder="***">
                    <input type="text">
                </div>
            </div>
            <!-- SECOND ROW -->
            <div class="second_row">
                <div class="Card_no">
                    <h3>Card Number</h3>
                    <div class="input" placeholder="**** **** **** ****">
                        <input type="text">
                    </div>
                </div>
            </div>
            <!-- THIRD ROW -->
            <div class="third_row">
                <div class="date">
                    <h3>Expiration Date</h3>
                    <div class="input">
                        <input type="date">
                    </div>
                </div>
            </div>
        
            <div>
                <img src="Socials/creditcard.png" alt="creditcards" height="100px" width="300px">
            </div>
            <a href="MainHomepage.php"><button class="button" type="submit" onclick="myFunction()">Confirm</button></a>
        </div>
    </div>

<script>
function myFunction() {
    alert("Purchase Successful, THANK YOU!");
}

</script>
    
</body>
</html>