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
        <h1>Crypto Devices library</h1> 
        <h4>Explore Our Library of Cryptographic Devices</h4>
        
    </div>
    </header>

<section>
<div class="container">
    <div class="card ">
        <div class="imgBx">       
            <img src="https://www.cryptomuseum.com/crypto/discret/img/301051/013/full.jpg" alt="">
        </div>
       <div class="content">
            <h2>Discret(Diskret)</h2>
        <p>Discret(Diskret) was a wheel-based manual cipher system,created in 1899 by 
        Dr.Friedrich Rehmann in Karlsruche (Germany).
        The Discret was designed with two concentric rings.It's inner ring was able to
        be loosened and rotated to allow the user to type in code.Thus, the Discret was
        both a typewriter and a cipher machine.</p>
    </div>
</div>
<div class="card ">
    <div class="imgBx"> 
        <img src="https://www.wondersandmarvels.com/wp-content/uploads/2012/12/6315616870_ed4cf36ae4_b1.jpg" alt="">
    </div>
    <div class="content">
            <h2>Lorenz</h2>
        <p>Lorenz is also known as Tunny.The first message encrypted using the Lorenz cipher was
           intercepted in early 1940 by a group of policemen in the UK.It is more advanced,complex,
           faster and more secure than enigma.Lorenz decrypts helped shorten the Second World War 
           in Europe.Used by Hitler, his high command and top generals</p>
        </div>
    </div>
    <div class="card ">
        <div class="imgBx">
            <img src="https://digitaldaze.io/wp-content/uploads/2024/01/The-enigma-machine-1089x730.png" alt="">
    </div>
    <div class="content">
        <h2>Enigma</h2>
        <p>Enigma was a cipher device.Used by Germany's military command to encode strategic messages before and during World War 2.
            The enigma machine produced encoded messages.Electrical signals from a typewriter-like keyboard were routes through a series
            of rotating wheels as we a plugboard that scrambled the output but did so in a way that was decipherable with the right settings.
            The enigma code was first broken by a polish mathematician Alan Turing developed a more advanced machine that was deciphering
            enigma messages by 1940.</p>
        </div>
        </div>
        <div class="card ">
            <div class="imgBx">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg25gi0T4vEZ3iMGTtis5APYjtQQ0vBGf1XA&usqp=CAU" alt="">
            </div>
            <div class="content">
                <h2>Typex</h2>
             <p>Typex was a rotor-based British cipher adapted from the commercial enigma but with a few changes to make the cipher
                more secure.The machine has a total of five rodeos of which the left-hand rotates as per the enigma while the two
                right-hand ones can be set at the start of encryption but stay static and do not rotate.The rotor themselves are again
                similar in function and look to enigma but generally with more notches that have standard engima rotors giving a 
                higher security level </p>
            </div>
        </div> 
        <div class="card ">
            <div class="imgBx"> 
                <img src="https://substackcdn.com/image/fetch/f_auto,q_auto:best,fl_progressive:steep/https%3A%2F%2Fmetacurity.substack.com%2Fapi%2Fv1%2Fpost_preview%2F138258969%2Ftwitter.jpg%3Fversion%3D4" alt="">    
            </div>
            <div class="content">
                <h2>Iron key</h2>
                <p>Iron key is a secure tamper-resistant USB memory stick with built in military grade-encryption.Iron key drives
                    are water proof, tamper proof and password protected.Any attempt to gain unauthorised access to the data will
                    initiate a self destruct sequence.Once destroyed the device can never be used again and there is no way to 
                    retrieve the data that was once stored on it.</p>
                </div>
            </div> 

</section>

<section>
    <div class="new-container">

<?php
// Include the database connection parameters
$rdbms = 'mysql';
$host = 'localhost';
$port = '3306';
$charset = 'utf8mb4';
$db_name = 'cryptoshow_db';
$pdo_dsn = $rdbms . ':host=' . $host. ';port=' . $port . ';dbname=' . $db_name . ';charset=' . $charset;
$pdo_user_name = 'cryptoshowuser';
$pdo_user_password = 'cryptoshowpass';

try {
    // Create a PDO instance
    $db_link = new PDO($pdo_dsn, $pdo_user_name, $pdo_user_password);
    $db_link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch events data from the database
    $stmt = $db_link->query("SELECT * FROM cryptographic_device");
    $devices = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display events data
  if ($devices) {
                    foreach ($devices as $cryptographic_device) {
                     
                        echo "<div class='event-box'>";
                        echo "<a href='checkoutform_general.php'><img src='../images/enigma.jpeg' alt='crypto device event' class='size'></a>";
                        echo "<div class='event-title'>{$cryptographic_device['crypto_device_name']}</div>";
                        echo "<div class='event-location'>{$cryptographic_device['crypto_device_desc']}</div>";
                        echo "</div>";  
                       
                       
                    }
                } else {
                    echo "No devices found.";
                }
} catch (PDOException $e) {
    // Handle errors
    die("Error: " . $e->getMessage());
}
?>
</div>
                
</section>

<section>
      <?php if ($loggedIn): ?>
         <section class="upcoming-events">
     <div class="section-title">
    <h1 class="section" > Upload Your Crypto Device</h1>
   <a href="./login.php"> <button class="button">Browse More Events</button></a>
    </div>    
            <?php else: ?>
                 <section class="upcoming-events">
     <div class="section-title">
    <h1 class="section" > Upload Your Crypto Device</h1>
   <a href="./managedevices.php"> <button class="button">Browse More Events</button></a>
    </div>
                <!-- If not logged in, display "Login" and "Sign Up" links -->
            
            <?php endif; ?>
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
