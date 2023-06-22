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

$id = $_GET['id'];

if(isset($_POST['wijzig'])){
    $naam = $_POST['naam']; 
    $prijs = $_POST['prijs'];
    $beschrijving = $_POST['description'];
    
    $statement = $connectie->prepare("UPDATE destinations SET naam = ?, prijs = ?, description = ? WHERE ID = ?");
    
    if ($statement) {
        $statement->execute([$naam, $prijs, $beschrijving, $id]);
    } else {
        // Hier kun je code toevoegen om de fout af te handelen, bijvoorbeeld:
        echo "Er is een fout opgetreden bij het voorbereiden van de update statement";
    }
}

$statement = $connectie->query("SELECT * FROM destinations WHERE ID = $id");
$dest = $statement->fetch();

?>

    <div class="edit-container">
        <form class="edit-form" action="edit.php?id=<?php echo $id ?>" method="POST">
        <p class="edit-text">Wijzig de naam</p>
            <input type="text" class="test5" name="naam" value="<?php echo $dest['naam'] ?>">
            <p class="edit-text">Wijzig de prijs</p>
            <input type="text" class="test5" name="prijs" value="<?php echo $dest['prijs'] ?>">
        <p class="edit-text">Wijzig de beschrijving</p>
            <input type="text" class="test5" name="description" value="<?php echo $dest['description'] ?>">
            <button type="submit" action="admin-panel.php" class="edit-submit" name="wijzig" value="wijzig getecht">

                Wijzig Gerecht
            </button>
        </form>
    </div>
    <?php
    include_once("login.php");
    include_once("forgot-password.php");
    include_once("signup.php");
?>
</body>
<script src="javascript/login.js"></script>

<script src="javascript/confirmpasswoord.js"></script>

<script src="javascript/dropwdown.js"></script>

<script src="javascript/search.js"></script>

<?php
ob_end_flush();
?>

</html>