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
        <link rel="stylesheet" href="Reg.css">
    </head>
    <!-- This is going to be the homepage -->

    <body>
        <?php
        include "../components/navbar.php"
            ?>
        <div class="mainReg">
            <div class="Register">
                <h3>Create your new Account in blogcode and enjoy the features that you can use by this website</h3>
                <p>Here you will find</p>
                <ul>
                    <li>All the bloggers</li>
                    <li>A great secure language and all of this</li>
                </ul>
            </div>
            <div class="forming">
                <form class="main bg bg-light container-fluid" style="margin-top:30px;" method="post"
                    action="regProcess.php">
                    <?php
                    if (isset($_SESSION["errorReg"])) {
                        $err = $_SESSION["errorReg"];
                        echo "<div class='inputField alert alert-danger'>$err</div>";
                    }

                    ?>
                    <div class="inputField">
                        <label for="name">
                            First Name
                        </label>
                        <input type="text" placeholder="Enter the name" required id="name" name="name">
                    </div>
                    <div class="inputField">
                        <label for="lname">
                            Last Name
                        </label>
                        <input type="text" placeholder="Enter the last name" required id="lname" name="lname">
                    </div>
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

                        <label for="image">
                            Image
                        </label>
                        <input type="file" placeholder="Upload the File" id="image" name="image" accept="image">
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