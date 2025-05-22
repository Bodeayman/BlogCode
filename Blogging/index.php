<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../master.css">
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="stylesheet" href="../HomePage/Homepage.css">
        </link>
        <script src="../JQuery/JQuery.js"></script>
        <script>
            $(document).ready(function () {
                $(".btn.btn-success").click(
                    function () {
                        window.location.href = "addNewBlog.php";
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
        <?php
        if (isset($_SESSION["success"])) {
            echo "<div class='alert alert-success alert-dismissible'><strong>Success!</strong></div>";
            }
        ?>
        <div class="mainPage">
            <h1>You have here your latest blogs</h1>
            <button class="btn btn-success">Click here to add more</button>

            <?php

            $hostname = getenv("DB_HOST");
            $password = getenv(name: "DB_PASSWORD");
            $username = getenv(name: "DB_USER");
            $dbname = getenv(name: "DB_NAME");
            $conn = mysqli_connect($hostname, $username, $password, $dbname);
            $sql = "select * from blog join blogname on blog.person_id = blogname.blogger_id where blogname.blogger_id = 12 order by blog.DateofPost desc ;";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                $blog = $row['blogs'];
                $name = $row['blogger_name'];
                $date = $row['DateofPost'];
                echo <<<"AllBlogs"
    <div class='con'>
        <div class='data'>
            <div class='dating'>
            $date
            </div>
            <div class='userName'>
            $name
            </div>
        </div>
        <div class='blog'>
        $blog
        </div>
    </div>
    AllBlogs;
                }
            ?>
        </div>



        <?php
        include "../components/footer.php"

            ?>



        <script src="../bootstrap.bundle.min.js"></script>
    </body>

</html>