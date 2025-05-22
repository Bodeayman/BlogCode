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
        <h1>Welcome again <?php echo $_COOKIE["userName"]; ?></h1>
        <img src='../uploads/avatars/<?php echo $_COOKIE['profileImage']; ?>'>
        <form action="logout.php" method="POST">
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
        <?php
        include "../components/footer.php";
        ?>



        <script src="../bootstrap.bundle.min.js"></script>
    </body>

</html>