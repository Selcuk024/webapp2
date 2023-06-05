<div class="overlay" id="register">

    <div class="wrapper">

        <h3>Create Account</h3>

        <a href="#" class="close">&times;</a>

        <div class="content">

            <div class="container">
                <?php

            if (isset($_POST['register-submit'])) {

                $username = isset($_POST['name']) ? $_POST['name'] : '';
                $email = isset($_POST['email']) ? $_POST['email'] : '';
                $password2 = isset($_POST['regpassword']) ? $_POST['regpassword'] : '';
                $profielfoto = isset($_FILES['pfp']) ? $_FILES['pfp'] : '';

                $uploaddir = '/media/profielfotos/';
                $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
                
                echo '<pre>';
                if (move_uploaded_file($_FILES['pfp']['tmp_name'], $uploadfile)) {
                    echo "File is valid, and was successfully uploaded.\n";
                } else {
                    echo "Possible file upload attack!\n";
                }
                
                echo 'Here is some more debugging info:';
                print_r($_FILES);
                
                print "</pre>";

                $sql = "INSERT INTO users (naam, mail, wachtwoord, profielfoto) VALUES ('$username', '$email', '$password2', '$profielfoto')";
                if ($connectie->query($sql) === TRUE) {
                    echo "User created successfully";
                } else {
                    echo "Error: " . implode("", $connectie->errorinfo());
                }
            }
            echo '<script>
            if(window.history.replaceState){
                window.history.replaceState(null, null, window.location.href);
            }
            </script>';

            ?>

                <form class="form" action="" method="post" enctype="multipart/form-data">

                    <label for="name">Name</label>
                    <input name="name" type="name" id="name" class="login-text" placeholder="Your Name">

                    <label>E-Mail</label>
                    <input type="email" name="email" class="login-text" placeholder="Your Email">

                    <label for="password" class="password-class">Password</label>
                    <input type="password" name="regpassword" class="login-text" placeholder="Your Password">

                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" placeholder="Confirm Password" id="confirm_password" required>
                    <label for="file-upload" class="custom-file-upload">
                        Custom Upload
                    </label>
                    <input id="file-upload" name="pfp" type="file" />
                    <input type="submit" name="register-submit" class="submit" value="Submit">
                </form>


            </div>



        </div>

    </div>

</div>