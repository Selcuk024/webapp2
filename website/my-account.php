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
            <a href="?page=settings" class="medium-text">Settings</a>
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
                }elseif($myaccount == "admin-panel"){
                    $resultSet = $connectie->query("SELECT * FROM destinations");
                    while ($item = $resultSet->Fetch()) {
        
                        echo ' <div class="rows">
                    <p class="admin-name">' . $item['naam'] . '</p>

                    <p class="admin-description">' . $item['description'] . '</p>

                    <p class="admin-price">€ ' . $item['prijs'] . '</p>
                    <a class="edit" href="edit.php?id=' . $item['ID'] . '">Edit Destination</a>
                <form class="del" action="delete.php" method="post">
                <input type="hidden" name="id" value="'. $item['ID'] . '">
                <button class="del-button" type="submit">
                    Delete Destination
                </button>
                </form>
                
            </div>';}
                }

            ?>
 <a href="#add">
                <div class="admin-add">
                   
                    <p class="add-name">Add A New Dish</p>
                </div>
            </a>
        </div>

    </div>
    <div class="overlay" id="add">

<div class="wrapper">

    <h3>Add A New Destination</h3>

    <a href="#" class="close">&times;</a>

    <div class="content">

        <div class="container">
            <?php
           if (isset($_POST['send'])) {
            $description = $_POST['description'];
            $price = $_POST['price'];
            $location = $_POST['location'];
            $beds = $_POST['beds'];
            $parking = $_POST['parking'];
            $restaurant = $_POST['restaurant'];
        
            $stmt = $connectie->prepare("INSERT INTO destinations ( description, prijs, location, beds, parking, restaurant,) VALUES (?, ?, ?, ?, ?, ?, ?)");
            
            if ($stmt->execute([$destname, $description, $price, $location, $beds, $parking, $restaurant])) {
                echo "Dish added successfully";
                header("refresh:0");
            } else {
                echo "Error: " . implode("", $stmt->errorinfo());
            }
        }
        

            ?>
            <form class="form" action="my-account.php?page=admin-panel" method="post">
                

                <label>Description</label>
                <input type="text" name="description" class="login-text" placeholder="Description">

                <label class="password-class">Price</label>
                <input type="number" name="price" class="login-text" placeholder="Price">

                <label class="password-class">Location</label>

                <input type="text" name="location" class="login-text" placeholder="Location">
                
                <label class="password-class">Beds</label>

                <input type="number" name="beds" class="login-text" placeholder="Beds">
                
                <label class="password-class">Parking</label>

                <input type="text" name="parking" class="login-text" placeholder="Parking">
                <label class="password-class">Restaurant</label>

                <input type="text" name="restaurant" class="login-text" placeholder="Restuarant">

                <input type="submit" name="send" class="submit" value="Submit">
            </form>


        </div>



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