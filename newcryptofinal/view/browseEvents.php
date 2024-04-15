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
        <h1>Browse Events </h1> 
        
        
    </div>
    </header>

    <section>
    <section>


    
    <div class="container">
        <div class="item-container">
            <div class="img-container">
                <img src="../images/cryptoshow.jpg" alt="Event image">
            </div>

            <div class="body-container">
                <div class="overlay"></div>

                <div class="event-info">
                    <p class="title"> Cryptology into the future</p>
                    <div class="separator"></div>
                    <p class="info">Leeds, UK</p>
                    <p class="price">Free</p>

                    <div class="additional-info">
                        <p class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            LS10 1LT
                        </p>
                        <p class="info">
                            <i class="far fa-calendar-alt"></i>
                            Mon, Apr 15, 9:00 pm 
                        </p>

                        <p class="info description">
                            Welcome to the Crptology into the Future Show
                        </p>
                    </div>
                </div>
                <button class="action">
                  <a href="cryptofuture.php">Book</a>
              </button>
                   
                  </div>
        </div>
      
        <div class="item-container">
            <div class="img-container">
                <img src="../images/cryptoshow2.jpg" alt="Event image">
            </div>

            <div class="body-container">
                <div class="overlay"></div>

                <div class="event-info">
                    <p class="title"> Cryptology Through Time </p>
                    <div class="separator"></div>
                    <p class="info">Leicester, UK</p>
                    <p class="price">Free</p>

                    <div class="additional-info">
                        <p class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            LE1 7RU
                        </p>
                        <p class="info">
                            <i class="far fa-calendar-alt"></i>
                            Tue, Apr 16, 8:00 PM 
                        </p>

                        <p class="info description">
                            Welcome to the Cryptology Through Time event 
                        </p>
                    </div>
                </div>
                <button class="action">
                  <a href="cryptotime.php"> Book</a>

                </button>
            
              
                </div>
        </div>
        <div class="item-container">
            <div class="img-container">
                <img src="../images/cryptoshow3.jpg" alt="Event image">
            </div>

            <div class="body-container">
                <div class="overlay"></div>

                <div class="event-info">
                    <p class="title"> Cryptology and Security</p>
                    <div class="separator"></div>
                    <p class="info">Leicester, UK</p>
                    <p class="price">Free</p>

                    <div class="additional-info">
                        <p class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            LE1 1SB
                        </p>
                        <p class="info">
                            <i class="far fa-calendar-alt"></i>
                            Wed, April 17, 6:00 PM 
                        </p>

                        <p class="info description">
                            Welcome to the Cryptology and Security Show 
                        </p>
                    </div>
                </div>
                <button class="action">
                  <a href="cryptosecurity.php"> Book</a>

                </button>
            
              
                </div>
        </div>
        <div class="item-container">
            <div class="img-container">
                <img src="../images/cryptoshow4.jpg" alt="Event image">
            </div>

            <div class="body-container">
                <div class="overlay"></div>

                <div class="event-info">
                    <p class="title"> Cryptology during World War II</p>
                    <div class="separator"></div>
                    <p class="info">London, UK</p>
                    <p class="price">Free</p>

                    <div class="additional-info">
                        <p class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            N1 9AG
                        </p>
                        <p class="info">
                            <i class="far fa-calendar-alt"></i>
                            Mon, Apr 22, 5:30 PM 
                        </p>

                        <p class="info description">
                            Welcome to the Cryptology during World War II event 
                        </p>
                    </div>
                </div>
                <button class="action">
                  <a href="Cryptoww2.php"> Book</a>

                </button>
                </div>
        </div>
        <div class="item-container">
            <div class="img-container">
                <img src="../images/image2.jpeg" alt="Event image">
            </div>

            <div class="body-container">
                <div class="overlay"></div>

                <div class="event-info">
                    <p class="title"> Cryptology Today Exhibition</p>
                    <div class="separator"></div>
                    <p class="info">Manchester, UK</p>
                    <p class="price">Free</p>

                    <div class="additional-info">
                        <p class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            M2 3GX
                        </p>
                        <p class="info">
                            <i class="far fa-calendar-alt"></i>
                            Mon, May 6, 8:00 PM 
                        </p>

                        <p class="info description">
                            Welcome to the Cryptology Today Exhibition event
                        </p>
                    </div>
                </div>
                <button class="action">
                  <a href="cryptotoday.php"> Book</a>

                </button>
            
              
                </div>
        </div>
</section>
 <section class="upcoming-events">
     <div class="section-title">
    <h1 class="section" > Upcoming Events</h1>
   <a href="./browseEvents.php"> <button class="button">Browse More Events</button></a>
    </div>

    
    
    <div class="event-container">
     <a href="./cryptologyww2.php"> <div class="event-box">
        <img src="../images/image2.jpeg" alt="crypto device event" class="size">
        <div class="event-title">Cryptology duriing World War II</div>
        <div class="event-date">Thur, Apr 4  5:30pm</div>
        <div class="event-location">90 York Wy, London N1 9AG</div>
        <h4 class="price">free</h4>
       <button class="button">Learn More</button>
      </div>
    </a>
  
      <div class="event-box">
       <a href="./cryptologytime.php"> <img src="../images/images.jpg" alt="crypto device event" class="size">
        <div class="event-title">Cryptology Through Time - 2024</div>
        <div class="event-date">Tue, Apr 16 8:00pm</div>
        <div class="event-location">Granville Rd, Leicester LE1 7RU</div>
        <h4 class="price">free</h4>
        <button class="button">Learn More</button>
      </div>
    </a>
  
     <a href="./cryptologysecurity.php" ><div class="event-box">
        <img src="../images/cryptoshow.jpg" alt="crypto device event" class="size">
        <div class="event-title">Cryptolography & Security</div>
        <div class="event-date">Wed, Apr 17 6:00pm</div>
        <div class="event-location">60 Rutland St,Leicester LE1 1SB</div>
        <h4 class="price">free</h4>
        <button class="button">Learn More</button>
      </div>
    </a>

    <a href="./cryptologytoday.php" ><div class="event-box">
        <img src="../images/image2.jpeg" alt="crypto device event" class="size">
        <div class="event-title">Cryptolology Today Exhibition</div>
        <div class="event-date">Mon, May 6 8:00pm</div>
        <div class="event-location">Windmill St, Manchester M2 3GX</div>
        <h4 class="price">free</h4>
        <button class="button">Learn More</button>
      </div>
    </a>
  
 
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
    $stmt = $db_link->query("SELECT * FROM event");
    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display events data
  if ($events) {
                    foreach ($events as $event) {
                     
                        echo "<div class='event-box'>";
                        echo "<a href='checkoutform_general.php'><img src='./images/event1.jpg' alt='crypto device event' class='size'></a>";
                        echo "<div class='event-title'>{$event['event_name']}</div>";
                        echo "<div class='event-date'>{$event['event_date']}</div>";
                        echo "<div class='event-location'>{$event['event_venue']}</div>";
                        echo "<button class='button'>Learn More</button>";
                        echo "</div>";
                       
                       
                    }
                } else {
                    echo "No events found.";
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
<h3>Create Event</h3>

<form action="../includes/eventconnection.php" method="post">
    <input type="text" name="event_name" placeholder="event_name">
    <input type="date" name="event_date" placeholder="event_date">
    <input type="text" name="event_venue" placeholder="event_venue">
    <button>Create Event</button>
    <button>Delete Event</button>
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
    $stmt = $db_link->query("SELECT * FROM event");
    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display events data
  if ($events) {
                    foreach ($events as $event) {
                     
                        echo "<div class='event-box'>";
                        echo "<a href='checkoutform_general.php'><img src='./images/event1.jpg' alt='crypto device event' class='size'></a>";
                        echo "<div class='event-title'>{$event['event_name']}</div>";
                        echo "<div class='event-date'>{$event['event_date']}</div>";
                        echo "<div class='event-location'>{$event['event_venue']}</div>";
                        echo "<button class='button'>Learn More</button>";
                        echo "</div>";
                       
                       
                    }
                } else {
                    echo "No events found.";
                }
} catch (PDOException $e) {
    // Handle errors
    die("Error: " . $e->getMessage());
}
?>
</div>



                
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
