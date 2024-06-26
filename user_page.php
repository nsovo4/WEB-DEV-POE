<?php

@include 'cnfig.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Pastimes</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <!-- Log in & Registration -->

  <!-- Header -->
  <!-- Header -->
  <!-- <i class="fa-solid fa-magnifying-glass"></i> -->

  <header>
    <h1>WELCOME TO PAST TIME</h1>
    <nav>
      <ul>
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="Clothing.html">Clothing</a></li>
        <li><a href="Shoes.html">Shoes</a></li>
        <li><a href="Sale & Promo.html">Sales & Promotion</a></li>
        <li><a href="Cart.html">Cart</a></li>
      </ul>
    </nav>
  </header>

  <!-- Main Content --->
      <div class="main-content">
          <!-- Home Page Pictures --->

              <div class="home-text">
                  <h2>Welcome to Pastimes - Where Vintage Becomes Timeless!</h2>
                  <p>Explore our collection of vintage clothing and shoes <br>
                     that will take you back in time. <br>
                    From retro classics to unique finds, we've got it all. <br>
                     Step into the past with Pastimes <br>
                    and make every outfit a statement! </p>
              </div>
            
        
        
          <!-- Slogan and Juicy Text -->

  <!-- Insert other main content here --->



  <!-- Footer -->
  <footer>
    <p>&copy; 2024 Pastimes Vintage Clothing Shop</p>
  </footer>



</body>

</html>