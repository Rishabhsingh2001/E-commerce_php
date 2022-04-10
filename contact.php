<?php

if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <script src="js/vendor/modernizr.js"></script>
  <style>
    .center {
      margin: auto;
      margin-top: 5%;
      text-align: center;
      width: 50%;
      border: 3px solid green;
      padding: 10px;
    }
    .fix {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      text-align: center;
    }
  </style>
</head>

<body>

  <nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <h1><a href="index.php">E-Commerce</a></h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li><a href="about.php">About</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="cart.php">View Cart</a></li>
        <li><a href="orders.php">My Orders</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
        <?php

        if (isset($_SESSION['username'])) {
          echo '<li><a href="account.php">My Account</a></li>';
          echo '<li><a href="logout.php">Log Out</a></li>';
        } else {
          echo '<li><a href="login.php">Log In</a></li>';
          echo '<li><a href="register.php">Register</a></li>';
        }
        ?>
      </ul>
    </section>
  </nav>



<div class="center">
  <div class="row" style="margin-top:30px;">
    <div class="small-12">

      <p>Wanna get in touch. Email us at <a href="">ecomm@support.com</a></p>
    </div>
  </div>
</div>
 

<div class="fix">
    <footer style="margin-top:10px;">
      <img src="images/footer.jpg" alt="Footer" width="120%">
    </footer>
  </div>







</body>

</html>