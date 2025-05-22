<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Page</title>
        <link rel="stylesheet" href="../master.css">
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="stylesheet" href="../Register/Reg.css">
    </head>
    <!-- This is going to be the homepage -->

    <body>
        <?php
        include "../components/navbar.php"
            ?>
        <div class="mainReg">
            <div class="Register">
                <h3>Login in your account</h3>
                <p>Here you will find</p>
                <ul>
                    <li>if you forget your password we will add features to reset it </li>
                    <li>This is going to be Login form</li>
                </ul>
            </div>
            <div class="forming">
                <form class="mainPage bg bg-light container-fluid mt-5" action="logProcess.php" method="POST">
                    <?php
                    if (isset($_SESSION["errorLog"])) {
                        $err = $_SESSION["errorLog"];
                        echo "<div class='inputField alert alert-danger'>$err</div>";
                    }

                    ?>

                    <div class="inputField">

                        <label for="email">
                            Email
                        </label>
                        <input type="email" placeholder="Enter the email" required id="email" name="email">

                    </div>
                    <div class="inputField">
                        <label for="password">
                            Password
                        </label>
                        <input type="password" placeholder="Enter the password" required id="password" name="password">

                    </div>
                    <div class="inputField">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
        <?php
        include "../components/footer.php";
        ?>



        <script src="../bootstrap.bundle.min.js"></script>
    </body>

</html>