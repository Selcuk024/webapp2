<div class="nav-container">
    <img src="media/booking-logo.png" class="nav-logo">
    <a class="nav-link" href="index.php">

    <h1 class="nav-text">World Wide Booking</h1>
    </a>
    <div class="nav-topics-container">
        <a href="my-account.php" class="my-account">My Account</a>
        <a href="about-us.php" class="about-us">About Us</a>
        <a href="contact.php" class="contact">Contact<a>

    </div>
    <a class="nav-login-button hidden" href="#register">Register</a>
    <a class="nav-signup-button hidden" href="#divOne">Sign In</a>

    <?php
                    if (isset($_POST['logout'])) {
                        unset($_SESSION['user']);
                        header("refresh:0");
                    }
                    ?>
                    <form class="l" method="post">
                        <button type="submit" class="m" name="logout">Log out</button>
                    </form>
</div>