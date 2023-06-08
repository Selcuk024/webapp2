<div class="overlay" id="divOne">

<div class="wrapper">

    <h3>Welcome Back</h3>

    <a href="#" class="close">&times;</a>

    <div class="content">

        <div class="container">
            <?php
            if (isset($_POST['mail']) && isset($_POST['password'])) {
                $mail = $_POST['mail'];
                $password = $_POST['password'];

                $stmt = $connectie->prepare("SELECT * FROM users WHERE mail=? AND wachtwoord=?");
                $stmt->execute([$mail, $password]);
                $user = $stmt->fetch();

                if ($user) {
                    $_SESSION['user'] = $user;
                    header("refresh:0");
                    echo 'goed';


                } else {
                    echo 'Incorrect email or password';
                }




            }
            ?>


            <form class="form" action="?" method="post">

            <img src="media/login-form-image.png" class="pilot">

                <label class="label">E-Mail</label>

                <input type="email" name="mail" class="login-text" placeholder="Your Name">

                <label class="password-class label">Password</label>

                <input type="password" name="password" id="br" class="login-text" placeholder="Your Password">

                <input type="submit" class="submit" value="Submit">

            </form>

        </div>



    </div>

</div>

</div>