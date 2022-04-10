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
  <title>About Us</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="js/vendor/modernizr.js"></script>
  <style>
    .footer-clean {
      padding: 50px 0;
      background-color: black;
      color: #4b4c4d;
    }

    .footer-clean h3 {
      margin-top: 0;
      margin-bottom: 12px;
      font-weight: bold;
      font-size: 16px;
      color: white;
    }

    .center {
      margin: auto;
      margin-top: 5%;
      width: 50%;
      border: 3px solid green;
      padding: 10px;
    }

    .footer-clean ul {
      padding: 0;
      list-style: none;
      line-height: 1.6;
      font-size: 14px;
      margin-bottom: 0;
      color: white;
    }

    .footer-clean ul a {
      color: inherit;
      text-decoration: none;
      opacity: 0.8;
      color: white;
    }

    .footer-clean ul a:hover {
      opacity: 1;
    }

    .footer-clean .item.social {
      text-align: right;
    }

    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: red;
      color: white;
      text-align: center;
    }

    .footer-clean .item.social>a {
      font-size: 24px;
      width: 40px;
      height: 40px;
      line-height: 40px;
      display: inline-block;
      text-align: center;
      border-radius: 50%;
      border: 1px solid #ccc;
      margin-left: 10px;
      margin-top: 22px;
      color: inherit;
      opacity: 0.75;
    }

    .footer-clean .item.social>a:hover {
      opacity: 0.9;
    }


    .footer-clean .copyright {
      margin-top: 14px;
      margin-bottom: 0;
      font-size: 13px;
      opacity: 0.6;
      color: white;
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
        <li class="active"><a href="about.php">About</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="cart.php">View Cart</a></li>
        <li><a href="orders.php">My Orders</a></li>
        <li><a href="contact.php">Contact</a></li>
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
    <div>
      <p>This is a E-Commerce Website. All listed Products are fake. This project just gives a preview to what a real world implementation of E-Commerce Website will look like. </p>

    </div>
  </div>

  <div class="footer">
    <div class="footer-clean">
      <footer>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-4 col-md-3 item">
              <h3> &nbsp;&nbsp; Help</h3>
              <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Corporate Information</a></li>
              </ul>
            </div>
            <div class="col-sm-4 col-md-3 item">
              <h3> &nbsp; &nbsp; About</h3>
              <ul>
                <li><a href="#">Company</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Legacy</a></li>
              </ul>
            </div>
            <div class="col-sm-4 col-md-3 item">
              <h3>&nbsp;&nbsp; Careers </h3>
              <ul>
                <li><a href="#">Job openings</a></li>
                <li><a href="#">Employee success</a></li>
                <li><a href="#">Benefits</a></li>
              </ul>
            </div>
            <div class="col-lg-3 item social">
              <a href="#"><i class="icon ion-social-facebook"></i></a>
              <a href="#"><i class="icon ion-social-twitter"></i></a>
              <a href="#"><i class="icon ion-social-snapchat"></i></a>
              <a href="#"><i class="icon ion-social-instagram"></i></a>
              <p class="copyright">E-Commerce © 2022</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>






</body>

</html>