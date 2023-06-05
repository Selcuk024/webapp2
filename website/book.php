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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    include_once("navbar-not-logged-in.php");
    ?>
    <div class="book-container">
        <div class="book-container2">
            <h1 class="book-text">
                Our Destinations
            </h1>
        </div>

    </div>
    <div class="book-container3">
        <div class="search-container">
            <div class="search-flex-box">
                <input type="text" class="searchbar" placeholder="Search Your Destination ">
                <button class="clear-button">Clear</button>
                <input type="submit" value="Search" class="search-button">
            </div>
            <div class="filter-container">
                <button class="sort-a-z">Sort By A-Z</button><button class="sort-price">Sort By Price</button>
            </div>

        </div>
        <div class="container-home3">
            <div class="container-book-new">
                <div class="popular-destinations">
                    <div class="popular-container1">
                        <img class="popular-section1" src="media/bahamas-hotel-image.png">
                    </div>
                    <div class="popular-container2">
                        <p class="big-text left">Margaritaville Resort Deluxe Rooms</p>
                        <p class="medium-text left">STARS</p>
                        <p class="small-text left">Caribbean, The Bahamas</p>
                        <p class="price left">$430 Per Night</p>
                    </div>
                    <div class="popular-container3">
                        <a href="book.php" class="book-button">Book Now</a>
                    </div>
                </div>
                <div class="popular-destinations">
                    <div class="popular-container1">
                        <img class="popular-section1" src="media/trump-tower-image.png">
                    </div>
                    <div class="popular-container2">
                        <p class="big-text left">Trump Tower</p>
                        <p class="medium-text left">STARS</p>
                        <p class="small-text left">Las Vegas, United States of America</p>
                        <p class="price left">$740 Per Night</p>
                    </div>
                    <div class="popular-container3">
                        <a href="book.php" class="book-button">Book Now</a>
                    </div>
                </div>
                <div class="popular-destinations">
                    <div class="popular-container1">
                        <img class="popular-section1" src="media/titanic-hotel-image.jpg">
                    </div>
                    <div class="popular-container2">
                        <p class="big-text left">Titanic Beach Resort</p>
                        <p class="medium-text left">STARS</p>
                        <p class="small-text left">Antalya, Turkiye</p>
                        <p class="price left">$300 Per Night</p>
                    </div>
                    <div class="popular-container3">
                        <a href="book.php" class="book-button">Book Now</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <?php
    include_once("login.php");

    include_once("signup.php");
?>
</body>

<?php
ob_end_flush();
?>
</html>