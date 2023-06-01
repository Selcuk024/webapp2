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
<body >
    <img class="contact-page-bg" src="media/contact-background.jpeg">
<?php
    include_once("navbar-not-logged-in.php");
    ?>
    <div class="contact-container">
        <div class="contact-info">
            <div class="contact-column">
                
            <p class="contact-text">
                Any Questions? Ask Us!
            </p>
            

            <form class="contact-form" name="myemailform" action="form-to-email.php">
  
                <input type="text" name="name" class="field1" placeholder="Your Name">
                <input type="text" name="email" class="field2" placeholder="Your E-Mail">
                <input type="text" name="number" class="field2" placeholder="Your Phone Number">
                <textarea class="big" name="message" placeholder="Your Message"></textarea>

            </div>
            <div class="contact-column2">
                <div class="container-contact">
                <p class="contact-small-text">How Would You Like Us To Contact You?</p>
                <div class="form-container">
                <input type="radio" id="mail-me" name="options" value="Mail Me">
                  <label for="mail-me">Mail Me</label>

                </div>
                <div class="form-container">

                <input type="radio" id="call-me" name="options" value="Call Me">
                  <label for="call-me">Call Me</label>
                </div>

                </div>
                <div class="another-contact-container">
                    <input type="submit" class="contact-submit" value="Submit">
                </div>
            </form>
            
            </div>

        </div>
    </div>
    <?php
    include_once("login.php");

    include_once("register.php");
?>
</body>
</html>