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
    <div class="fill">

    </div>
    <?php 
$id = $_GET['id'];

$statement = $connectie->prepare("SELECT * FROM destinations WHERE ID = $id");
$statement->execute();
$destinations = $statement->fetchAll();
foreach($destinations as $destination){
    echo '<div class="destination-container">
    <div class="destination-half">
        <img src=' . $destination['foto'] . ' class="destination-page-image">
    </div>
    <div class="destination-half">
        <p class="destination-title" >' . $destination['naam'] . '</p>
        <p class="destination-text" >' . $destination['description'] . '</p>
        <div class="row-container">
        <p class="destination-price">' . $destination['prijs'] . '$ A Night</p>
        <input type=submit class="book-button2" value="Book Now">
        </div>
    </div>
</div>';
}
?>
    <div class="destination-container">
        <div class="destination-half">
            <div class="row-container">
                <svg width="76" height="76" viewBox="0 0 76 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M38.3908 63.1491C41.3548 61.7159 60.1663 51.9455 60.1663 34.8333C60.1663 22.591 50.242 12.6667 37.9997 12.6667C25.7574 12.6667 15.833 22.591 15.833 34.8333C15.833 51.9455 34.6445 61.7159 37.6086 63.1491C37.865 63.2732 38.1343 63.2732 38.3908 63.1491ZM37.9997 44.3333C43.2464 44.3333 47.4997 40.08 47.4997 34.8333C47.4997 29.5866 43.2464 25.3333 37.9997 25.3333C32.753 25.3333 28.4997 29.5866 28.4997 34.8333C28.4997 40.08 32.753 44.3333 37.9997 44.3333Z"
                        fill="#222222" />
                </svg>
                <p>Caribbean, The Bahamas</p>
            </div>
            <div class="row-container">
                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_68)">
                        <path
                            d="M13.417 24.9167C16.5987 24.9167 19.167 22.3483 19.167 19.1667C19.167 15.985 16.5987 13.4167 13.417 13.4167C10.2353 13.4167 7.66699 15.985 7.66699 19.1667C7.66699 22.3483 10.2353 24.9167 13.417 24.9167ZM36.417 13.4167H21.0837V26.8333H5.75033V9.58334H1.91699V38.3333H5.75033V32.5833H40.2503V38.3333H44.0837V21.0833C44.0837 16.8475 40.6528 13.4167 36.417 13.4167Z"
                            fill="black" />
                    </g>
                    <defs>
                        <clipPath id="clip0_130_68">
                            <rect width="46" height="46" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

                <p>3 Beds</p>
            </div>
        </div>
        <div class="destination-half">
            <div class="row-container">

            </div>
        </div>
    </div>
    <?php
include_once("login.php");

include_once("forgot-password.php");
include_once("signup.php");
?>


</body>

<?php
ob_end_flush();
?>

</html>