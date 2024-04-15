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
            <li><a href="./managevents.php" class="link">Manage Events</a></li>
            <li><a href="./managedevices.php.php" class="link">Manage Devices</a></li>
            <?php if ($loggedIn): ?>
                <!-- If logged in, display "My Account" and "Create Device" links -->
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
        <h1>Manage Devices</h1> 
        <h4>Add your crypto device to our library</h4>
        
    </div>
    </header>

        
  <section>
  <form action="../includes/deviceconnection.php" method="post">
    <input type="text" name="user_firstname" placeholder="First name">
    <input type="text" name="user_lastname" placeholder="Last name">
    <input type="text" name="crypto_device_name" placeholder="Device Name">
    <input  type="text" name="crypto_device_desc" placeholder="Description">
    <button type="submit" class="form-button">Add Device</button>   
</form>  
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
    echo "<table border='1'>";
    echo "<tr><th>Firstname</th><th>Lastname</th><th>Device Name</th><th>Description</th></tr>";
    
    if ($devices) {
        foreach ($devices as $cryptographic_device) {
            echo "<tr>";
            echo "<td>{$cryptographic_device['user_firstname']}</td>";
            echo "<td>{$cryptographic_device['user_lastname']}</td>";
            echo "<td>{$cryptographic_device['crypto_device_name']}</td>";
            echo "<td>{$cryptographic_device['crypto_device_desc']}</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No events found.</td></tr>";
    }

    echo "</table>";
} catch (PDOException $e) {
    // Handle errors
    die("Error: " . $e->getMessage());
}
?>
</div>



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
