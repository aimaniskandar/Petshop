<?php
    session_start();
    
    echo "<script>window.location.href ='MainHomepage.php'</script>";

    session_destroy();

?>