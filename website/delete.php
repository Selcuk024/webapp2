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



// Prepare the DELETE statement
$id = $_POST['id'];


$sql = "DELETE FROM destinations WHERE ID = :id";
$stmt = $connectie->prepare($sql);

// Bind the primary key value to the placeholder
$stmt->bindValue(':id', $_POST['id']);

// Execute the DELETE statement and check the result
if ($stmt->execute()) {
  echo '<div class="delete-container">
        <div class="delete-background">
        <p class="delete-text">
        Destination Deleted!
        </p>
        <div class="row-container">
        <a href="admin-panel.php?page=admin-panel" class="delete-link">Go Back To The Admin Panel</a>
        <a href="index.php" class="delete-link">Go Back To Home</a>
        </div>
        </div>
  </div>';
} else {
  echo "Error deleting record: " . $stmt->errorInfo()[2];
}
?>
</body>
<?php
    include_once("login.php");

    include_once("forgot-password.php");
    include_once("signup.php");
?>
<script src="javascript/login.js"></script>

<script src="javascript/confirmpasswoord.js"></script>

<script src="javascript/dropwdown.js"></script>

<script src="javascript/search.js"></script>

<?php
ob_end_flush();
?>
</html>