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

    <img class="try" src="../images/cryptoshow4.jpg" alt="try">
   
    
  
   <div class="event-info-container">
       <h1>Cryptographic Device Show</h1>
       <p>Welcome to the Cryptology into the Future</p>
       <h2>About Event</h2>
       <p>Embark on a visionary journey into the future of cryptology, where innovation and technology converge to shape tomorrow's security landscape. This event is a platform for forward-thinkers and pioneers in the field to explore cutting-edge developments, anticipate emerging trends, and envision the future of cryptography.</p>
       <p>During this event, you'll have the opportunity to:</p>
       <ul> 
           <li>Discover groundbreaking research and advancements in cryptology</li>
           <li>Explore the potential impact of quantum computing on cryptography</li>
           <li>Discuss strategies for adapting to evolving cybersecurity threats in the digital age</li>
           
       </ul>
       <br>
       <p>Join us for an enriching experience where you can connect, learn, and be inspired by the limitless possibilities of cryptographic innovation.</p>
       <h3>Location</h3>
       <p class="info"><i class="fas fa-map-marker-alt"></i>Armouries Dr, Leeds LS10 1LT</p>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2356.907263387262!2d-1.5342514238247758!3d53.79113807242159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48795c3e0bccb1db%3A0xc9d4b4c85aad9bd2!2sNew%20Dock!5e0!3m2!1sen!2suk!4v1713096006142!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
       <h4>Date & Time</h4>
       <p class="info"><i class="far fa-calendar-alt"></i> Mon, Apr 15, 9:00 pm</p>
       <h5>Price</h5>
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
