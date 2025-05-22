<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main Page</title>
        <link rel="stylesheet" href="../master.css">
        <link rel="stylesheet" href="homepage.css">

        <link rel="stylesheet" href="../bootstrap.min.css">
        </link>
    </head>
    <!-- This is going to be the homepage -->

    <body>
        <?php
        include "../components/navbar.php"

            ?>
        <div class="mainPage">
            <h1>Welcome again to Blogcode</h1>
            <p>Giving you the latest posts from our friends</p>
            <?php

            $hostname = getenv("DB_HOST");
            $password = getenv(name: "DB_PASSWORD");
            $username = getenv(name: "DB_USER");
            $dbname = getenv(name: "DB_NAME");
            $conn = mysqli_connect($hostname, $username, $password, $dbname);
            $sql = "select * from blog join blogname on blog.person_id = blogname.blogger_id order by blog.DateofPost desc;";
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
        include "../components/footer.php";
        ?>



        <script src="../bootstrap.bundle.min.js"></script>
    </body>

</html>