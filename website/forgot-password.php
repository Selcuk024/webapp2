<div class="overlay" id="forgot-password">

<div class="wrapper">

    <h3>Forgot Password</h3>

    <a href="#" class="close">&times;</a>

    <div class="content">

        <div class="container">
            <?php
            if (isset($_POST['mail']) && isset($_POST['password'])) {
                $mail = $_POST['mail'];
                $password = $_POST['password'];

                $statement = $connectie->prepare("UPDATE users SET wachtwoord= ? WHERE mail=? ");

                if ($statement) {
                    $statement->execute([$password, $mail]);
                } else {
                    // Hier kun je code toevoegen om de fout af te handelen, bijvoorbeeld:
                    echo "Er is een fout opgetreden bij het voorbereiden van de update statement";
                }




            }
            ?>


            <form class="form" action="?" method="post">


                <label class="label">E-Mail</label>

                <input type="email" name="mail" class="login-text" placeholder="Your E-mail">

                <label class="password-class label">New Password</label>

                <input type="password" name="password"  class="login-text" placeholder="New Password">
                
                <input type="submit" class="submit" value="Submit">

            </form>

        </div>



    </div>

</div>

</div>