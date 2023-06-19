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
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
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
                <form class="x" method="post">
                    <input type="text" class="searchbar" name="zoekveld" placeholder="Search">
                    <button class="clear-button">Clear</button>
                    <input type="submit" value="Search" class="search-button">

                </form>
            </div>
            <div class="filter-container">
                <?php
                 $sorting = $_GET['sort'];
                 var_dump($sorting);
                ?>
                <a href="?sort=a-z"  class="sort-a-z <?php $sorting == "a-z" ? 'background' : '' ?>">Sort By
                    A-Z</a><a href="?sort=price" <?php $sorting == "price" ? 'background' : '' ?>
                    class="sort-price">Sort By Price</a>
            </div>

        </div>

        <?php
    
        if (isset($_POST['zoekveld'])) {
            $statement = $connectie->prepare("SELECT * FROM destinations WHERE naam LIKE ? ");
            $statement->execute(['%' . $_POST['zoekveld'] . '%']);
            $destinations = $statement->fetchAll();

        }elseif($sorting == "a-z") {
            $statement = $connectie->prepare("SELECT * FROM destinations ORDER BY  naam ASC");
            $statement->execute();
            $destinations = $statement->fetchAll();
        } elseif($sorting == "price"){
            $statement = $connectie->prepare("SELECT * FROM destinations ORDER BY prijs ASC ");
            $statement->execute();
            $destinations = $statement->fetchAll();
        }else { 
            $statement = $connectie->query("SELECT * FROM destinations");
            $destinations = $statement->fetchAll();
        }

            foreach ($destinations as $destination) {
                echo '<div class="container-home3">
                        <div class="container-book-new">
                            <div class="popular-destinations">
                                <div class="popular-container1">
                                    <img class="popular-section1" src='.$destination['foto'] .'>
                                </div>
                                <div class="popular-container2">
                                    <p class="big-text left">' . $destination['naam'] . '</p>
                                    <p class="medium-text left">STARS</p>
                                    <p class="small-text left">'. $destination['location'] . '</p>
                                    <p class="price left">$'. $destination['prijs'] . ' Per Night</p>
                                </div>
                                <div class="popular-container3">
                                    <a href="destination.php?id=' . $destination['ID'] . '" class="book-button">Book Now</a>
                                </div>
                            </div> 
                        </div>
                    </div>';
                      }
            ?>


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
