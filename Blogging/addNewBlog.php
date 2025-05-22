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
        <link rel="stylesheet" href="addingNewBlog.css">
        <script src="../JQuery/JQuery.js"></script>
        <script>
            $(document).ready(function () {
                $(".btn.btn-primary").click(
                    function () {
                        window.location.href = "process.php";
                    }
                )
            })
        </script>
    </head>
    <!-- This is going to be the homepage -->

    <body>
        <?php
        include "../components/navbar.php"
            ?>
        <form action="process.php" method="POST">
            <div class="adding">
                <h1>Add a new Blog</h1>
                <p>Write any thing in this comments</p>
                <input type="textarea" col="9" row="9" class="textTyping" name="blogging">
                <input type="submit" value="Post the blog" class="btn btn-primary">
            </div>

        </form>




        <?php
        include "../components/footer.php";
        ?>



        <script src="../bootstrap.bundle.min.js"></script>
    </body>

</html>