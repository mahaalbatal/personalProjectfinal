<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<link rel="stylesheet" type="text/css" href="../CSS/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<header class="mainbar">

<div class="loc">
    <i class="bi bi-geo-alt-fill"></i>
    <div class="name1">Oakville</div>
</div>

<div class="logo">
    <img width="120" src="../images/Picture1.png" alt="logo">
</div>

<div class="username">
    <?php
            if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true){
                echo($_SESSION["username"]);
                echo'<a href="logout.php">Log out</a>'; 
                } else {
                    echo'<a href="../LogIn.html">Log In</a>'; 
                }?>
                

</div>

</header>



<nav class="navbar">

        
<ul class="nav">

        <li>
            <a href="index.html">
                <i class="bi bi-house-heart"></i>
                <div class="name">Home</div>
            </a>
        </li>

        <li>
            <a href="gallery.html">
            <i class="bi bi-images"></i>
            <div class="name">Gallery</div>
            </a>
        </li>
            
        <li>
            <a href="offers.php">
            <i class="bi bi-gift"></i>
            <div class="name">Offers</div>
            </a>
        </li>
                
        <li>
            <a href="offersform.html">
            <i class="bi bi-emoji-smile"></i>
            <div class="name">Reviews</div>
            </a>
        </li>
            
        <li>
            <a href="offersform.html">
            <i class="bi bi-calendar-event"></i>
            <div class="name">Events</div>
            </a>
        </li>
            
        <li>
            <a href="offersform.html">
            <i class="bi bi-person-circle"></i>
            <div class="name">Profile</div>
            </a>
        </li>
        
    
    </ul>
    <ul>
        <a href="cart.html">
            <li class="cart">
                <i class="bi bi-cart3"></i>
                <div id="cartAmount" class="cartamount">0</div>
            </li>
        </a>
            
    </ul>
</nav>


