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
            <li><a href="./devices.php" class="link">Crypto Devices</a></li>
             <li><a href="./CreateEvent.php" class="link">Create Event</a></li>
            <li><a href="./managevents.php" class="link">Manage Events</a></li>
            <li><a href="./managedevices.php" class="link">Manage Devices</a></li>

                <form action="../includes/logout.inc.php" method="post">
                <button>Logout</button>
     
            
        </ul>
        <ion-icon name="menu-outline" class="menu"></ion-icon>
    </nav>
  
  
    <header>
    <div class="header-content">
        <h1>CryptoShow </h1> 
        <h4>cryptoshow brings together fllow tehcn enthuasits an</h4>
        
    </div>
    </header>

        
  <section>

    <div class="intro-container">
     <a href="./managevents.php"><div class="intro-plan card1" >
         <h5 class="intro-title">Events Booked </h5>
         <p class="intro-price">Keep a track of all the events you have booked</p>
       </div>
       </a>
      <a href="./managevents.php"> <div class="intro-plan card2">
         <h5 class="intro-title">Create Event</h5>
         <p class="intro-price">create your event and keep a track of all the events you have booked</p>
         
       </div>
       </a>
      <a href="./managedevices.php"><div class="intro-plan card3">
         <h5 class="intro-title">Upload Crypto Devices</h5>
         <p class="intro-price">Upload your crypto devices and add to the crpyshow library</p>  
     </div>
     
    </a>

    
  </section>

<section>
<div class="section-title">
    <h1 class="section" > Upcoming Events</h1>
   <a href="./browseEvents.php"> <button class="button">Browse More Events</button></a>
    </div>

    
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
                    <p class="info">Leicester, UK</p>
                    <p class="price">Free</p>

                    <div class="additional-info">
                        <p class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            LE1 7RU
                        </p>
                        <p class="info">
                            <i class="far fa-calendar-alt"></i>
                            Fri, Sep 19, 10:00 AM 
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
                            Wed, Sep 30, 03:00 PM 
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
                            LE1 1QD
                        </p>
                        <p class="info">
                            <i class="far fa-calendar-alt"></i>
                            Sun, Sep 20, 03:00 PM 
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
                    <p class="info">Leicester, UK</p>
                    <p class="price">Free</p>

                    <div class="additional-info">
                        <p class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            N1 9AG
                        </p>
                        <p class="info">
                            <i class="far fa-calendar-alt"></i>
                            Mon, Jul 19, 11:00 PM 
                        </p>

                        <p class="info description">
                            Welcome to the Cryptology during World War II event 
                        </p>
                    </div>
                </div>
                <button class="action">
                  <a href="cryptoww2.php"> Book</a>

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
                    <p class="info">Leicester, UK</p>
                    <p class="price">Free</p>

                    <div class="additional-info">
                        <p class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            M2 3GX
                        </p>
                        <p class="info">
                            <i class="far fa-calendar-alt"></i>
                            Tue, Feb 13, 03:00 PM 
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
