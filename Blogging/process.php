<?php

session_start();
// here you will enter your name in the database
if (isset($_COOKIE["userName"])) {
    $hostname = getenv("DB_HOST");
    $password = getenv(name: "DB_PASSWORD");
    $username = getenv(name: "DB_USER");
    $dbname = getenv(name: "DB_NAME");
    $table = "blogname";
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    $cook = $_COOKIE["userName"];
    $myBlog = $_POST["blogging"];
    $sqlfind = "SELECT * FROM blogname where blogger_name = '$cook'";
    $checkResult = $conn->query($sqlfind);
    $randomizerNum = rand(0, 10000);
    $found_id = $checkResult->fetch_assoc()["blogger_id"];
    $sql = "insert into blog (blog_id,blogs,DateofPost,person_id) values('$randomizerNum','$myBlog',now(),'$found_id')";
    $processData = $conn->query($sql);
    $_SESSION["success"] = "Your blog has been successfully uploaded";
    header("Location:index.php");
    } else {
    $_SESSION["error"] = "You should sign in first";

    header("Location:../Register/index.php");
    }






