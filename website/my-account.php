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

    <div class="my-account-container2">


    </div>
    <div class="my-account-container">
        <div class="my-account-left">
            <div class="pfp">
                <img class="my-account-img" src="media/login-form-image.png">
            </div>
            <a href="?page=settings" class="medium-text" >Settings</a>
            <a href="?page=my-bookings" class="medium-text">My Bookings</a>
            <a href="?page=admin-panel" class="medium-text">Admin Panel</a>
        </div>
        <div class="my-account-right">
            <?php 
                $myaccount = $_GET['page'];
                if($myaccount == "settings"){
                    echo' 
                    <p class="settings">Settings</p>
                    <div class="my-account-row">
                        <div class="input-label">
                            <label for="name">Name</label>
                            <input class="my-account-text" type="name" name="name">
                        </div>
                        <input type="submit" class="my-account-edit" name="edit" value="Edit">
                    </div>
                    <div class="my-account-row">
                        <div class="input-label">
        
                            <label for="mail">E-Mail</label>
                            <input type="mail" class="my-account-text" name="mail">
                        </div>
                        <input type="submit" class="my-account-edit" name="edit" value="Edit">
                    </div>
                    <div class="my-account-row">
                        <div class="input-label">
        
                            <label for="number">Phone Number</label>
                            <input type="number" class="my-account-text" name="number">
                        </div>
        
                        <input type="submit" class="my-account-edit" name="edit" value="Edit">
                    </div>
                    <div class="my-account-row">
                        <div class="input-label">
        
                            <label for="password">Password</label>
                            <input type="password" class="my-account-text" name="password">
                        </div>
                        <input type="submit" class="my-account-edit" name="edit" value="Edit">
                    </div>
                    ';
                }elseif($myaccount == "my-bookings"){
                    echo'
                    <p class="settings">My Bookings</p>
                    <div class="my-account-row">
                    <div class="my-account-in-row-container">
                    <img class="my-account-destination-image" class="my-account-img" src="media/bahamas-hotel-image.png">
                    </div>
                    <div class="my-account-in-row-container">
                    <p class="my-account-medium-text">Margaritaville Resort Deluxe Rooms</p>
                    <p class="my-account-small-text">Caribbean, The Bahamas</p>
                    <p class="my-account-medium-text">4 Nights</p>
                    </div>
                    <div class="my-account-in-row-container">
                    <a class="my-account-edit"> View </a>
                    </div>
                    </div>
                    ';
                }

            ?>

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