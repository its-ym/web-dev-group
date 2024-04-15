<?php



require_once '../includes/config_session.php'; 
require_once 'signup_view.php';
require_once 'login_view.php'; 



if (isset($_SESSION["user_id"]) && isset($_SESSION["user_name"])) {
    $loggedIn = true;
} else {
    $loggedIn = false;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../style.css">


</head>
<body>
    
    <nav class="navigation-bar">
        <a href="../homepage.php"><h1 class="logo">CryptoShow</h1></a>
        <ul class="navigation">
          
            <li><a href="./browseEvents.php" class="link">Browse Events</a></li>
            <li><a href="./devices.php" class="link">Crypto Devices</a></li?>
            <li><a href="./CreateEvent.php" class="link">Create Event</a></li>
            <?php if ($loggedIn): ?>
            
                <!-- If logged in, display "My Account" and "Create Device" links -->
                
                <li><a href="./profile.php" class="link">Profile</a></li>
                <form action="../includes/logout.inc.php" method="post">
     <button>Logout</button>
     </form>
            <?php else: ?>
                <!-- If not logged in, display "Login" and "Sign Up" links -->
                <li><a href="./login.php" class="link">Login</a></li>
                <li><a href="./registration.php" class="link">Sign Up</a></li>
            <?php endif; ?>
        </ul>
        <ion-icon name="menu-outline" class="menu"></ion-icon>
    </nav>
  
    <header>
    <div class="header-content">
        <h1>Register</h1>    
    </div>
    </header>

<section>

  <form action="../includes/signup_includes.php" method="post" style="border:1px solid #ccc">
    <div class="allform-container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="user_name"><b>Username</b></label>
      <input type="text" name="user_name" placeholder="Full name" >

      <label for="user_email"><b>Email</b></label>
      <input type="text" name="user_email" placeholder="Email address" >
  
      <label for="user_hashed_password"><b>Password</b></label>
      <input type="password" name="user_hashed_password" placeholder="Password" >
      <p class="password-condition">Password must have a least 8 characters and contain at least two of the following: uppercase letters, lowercase letters, numbers and symbols</p>
  
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
  
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
  
      
      
        <button type="submit" class="form-button">Sign Up</button>
      
    </div>
  </form>

  <?php
check_signup_errors();
?>

</section>
 

<footer class="footer">
<div class="footer-container">
<div class="row">
  <div class="footer-col">
    <h4>CryptoShow </h4> 
    <p>Experience amazing tech events and exhibitions</p>
    </div>
<div class="footer-col">
  <h4>Useful Links</h4>
  <ul>
    <li><a href="../homepage.php" class="link">About</a></li>
          <li><a href="./browseEvents.php" class="link">Browse Events</a></li>
          <li><a href="./devices.php" class="link">Crypto Devices</a></li>
          <li><a href="./CreateEvent.php" class="link">Create Event</a></li>
          <li><a href="./login.php" class="link">Login</a></li>
          <li><a href="./registration.php" class="link">Sign Up</a></li>
  </ul>
</div>

<div class="footer-col">
  <h4>Follow Us</h4>
  <div class="social-media">
    <ion-icon name="logo-facebook"></ion-icon>
    <ion-icon name="logo-instagram"></ion-icon>
    <ion-icon name="logo-twitter"></ion-icon>
  </div>

</div>

<div class="footer-col">
  <h4>Contact</h4>
  <ul>
    <li><span> <ion-icon name="location-outline"></ion-icon>
      Gateway House, Leicester LE1 9BH</li>
    <li><ion-icon name="call-outline"></ion-icon>01162551551</li>
    
  </ul>
  
</div>



</div>

  
</footer>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 

<script>
 const menu = document.querySelector('.menu')
 const navigation = document.querySelector('.navigation')
 
 menu.addEventListener('click',()=>{
 navigation.classList.toggle('mobile-menu')
 })
</script>
</body>
</html>  

