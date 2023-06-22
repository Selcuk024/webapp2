<?php
session_start();
ob_start();
$dsn = 'mysql:dbname=worldwide_booking;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $connectie = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
}
?>
<?php


$loggedIn = false;

if (isset($_SESSION['user'])) {
    $loggedIn = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <title>Scroll test</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
        
</head>

<body>
<?php
  if (isset($_SESSION['user'])) {
    include_once("navbar-logged-in.php");
} else {
    include_once("navbar-not-logged-in.php");
}
?>
    <div class="section" id="sec1">

        <img class="polynesia-image-background" src="media/polynesia2-image-background.png">
        <div class="text-container" id="text-container">
            <h1 class="about-us-text">About Us</h1>
        </div>
        <img class="polynesia-image-overlay" src="media/polynesia2-image-overlay.png">
    </div>
    <div class="section" id="sec2">
        <main class="section2-main">
            <div class="about-us-text2-container">
                <h1 data-aos="fade-down" class="about-us-text2">At World Wide Booking, we believe that travel has
                    the power to enrich lives and broaden
                    horizons.
                    Our mission is to provide seamless travel experiences that inspire and connect people
                    from all corners of the globe.
                    With our user-friendly platform, extensive destination coverage, and personalized service,
                    we strive to make your travel dreams a reality.
                    Join us as we embark on a journey to explore the world together.</h1>
            </div>
            <svg class="sec2-ding1-rechtsonder" width="479" height="162" viewBox="0 0 479 162" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M496.383 158.81H82.3949C38.5548 158.81 3 123.918 3 80.9051C3 37.8925 38.5548 3 82.3949 3H496.383"
                    stroke="white" stroke-width="5" stroke-miterlimit="10" />
                <path
                    d="M496.382 131.153H80.9871C52.7122 131.153 29.7866 108.642 29.7866 80.905C29.7866 53.1679 52.7122 30.6567 80.9871 30.6567H496.382"
                    stroke="white" stroke-width="5" stroke-miterlimit="10" />
                <path
                    d="M496.383 103.497H79.5794C66.8698 103.497 56.5332 93.3667 56.5332 80.9051C56.5332 68.4435 66.8296 58.3134 79.5794 58.3134H496.383"
                    stroke="white" stroke-width="5" stroke-miterlimit="10" />
            </svg>
            <svg class="sec2-linksonder" width="162" height="89" viewBox="0 0 162 89" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 89L5.5 82.3947C5.5 39.8905 39.3175 5.49976 80.9051 5.49976C122.493 5.49975 156.31 39.8905 156.31 82.3947V89H161.31V82.3947C161.31 37.2186 125.343 0.499754 80.9051 0.499756C36.4674 0.499759 0.5 37.2186 0.5 82.3947L0.5 89H5.5Z" fill="white"/>
</svg>
<svg class="sec2-rechtsboven" width="161" height="81" viewBox="0 0 161 81" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0C0.925421 44.3608 36.5311 80.1238 80.3866 80.1238C124.242 80.1238 159.848 44.3608 160.773 0H155.772C154.848 41.6843 121.395 75.1238 80.3866 75.1238C39.3783 75.1238 5.92504 41.6843 5.00115 0H0Z" fill="#D9D9D9"/>
</svg>


        </main>
    </div>
  
    <?php
    include_once("login.php");

    include_once("forgot-password.php");
    include_once("signup.php");
?>
</body>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="javascript/main.js"></script>
    <script>
        window.addEventListener('scroll', function () {
            var textContainer = document.getElementById('text-container');
            var section2 = document.getElementById('sec2');
            var section2Offset = section2.offsetTop;
            var scrollPosition = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;

            if (scrollPosition > section2Offset) {
                textContainer.style.position = 'absolute';
                textContainer.style.top = (section2Offset + section2.offsetHeight) + 'px';
            } else {
                textContainer.style.position = 'fixed';
                textContainer.style.top = '';
            }
        });
    </script>
<?php
ob_end_flush();
?>
</html>