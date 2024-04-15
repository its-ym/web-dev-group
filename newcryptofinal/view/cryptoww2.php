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
        <h1>CryptoShow </h1> 
        <h4>cryptoshow brings together fllow tehcn enthuasits an</h4>
        
    </div>
    </header>

        
    <img class="try" src="../image4.webp" alt="try">
   
    
  
   <div class="event-info-container">
       <h1>Cryptology during World War II</h1>
       <p>Welcome to the Cryptology during World War II event!</p>
       <h2>About Event</h2>
       <p>Step back in time and uncover the pivotal role of cryptology during World War II. Explore the clandestine world of codebreakers, cipher machines, and secret communications that shaped the outcome of the war. Delve into the fascinating stories of cryptanalysts and their groundbreaking efforts to intercept and decrypt enemy messages, turning the tide of battle.</p>
       <p>During this event, you'll have the opportunity to:</p>
       <ul> 
           <li>Discover the Enigma machine and its significance in Allied codebreaking efforts</li>
           <li>Learn about the contributions of notable cryptanalysts such as Alan Turing and the Bletchley Park team</li>
           <li>Explore the impact of cryptology on key wartime events and operations, including the Battle of Midway and the Normandy landings</li>
           
       </ul>
       <br>
      
       <h3>Location</h3>
       <p class="info"><i class="fas fa-map-marker-alt"></i>90 York Wy, London N1 9AG</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.842333236459!2d-0.12437352279569283!3d51.53445162181936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b3e69e594f5%3A0xd9482f49e7844001!2sYork%20Wy%2C%20London%20N1%209AG!5e0!3m2!1sen!2suk!4v1712579425654!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        <h4>Date & Time</h4>
       <p class="info"><i class="far fa-calendar-alt"></i> Mon, Apr 22, 5:30 pm</p>
       <h5>Price </h5>
       <p>Free</p>
       <a href="checkoutform_general.php" class="active">Book</a> 
   </div>

    
  
 

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
