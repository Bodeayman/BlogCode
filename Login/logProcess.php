<?php
session_start();
$hostname = getenv("DB_HOST");
$password = getenv(name: "DB_PASSWORD");
$username = getenv(name: "DB_USER");
$dbname = getenv(name: "DB_NAME");
$table = "blogname";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];
    $email = $_POST['email'];
    }
$sql = "select * from blogname where blogger_email = '$email' and blogger_pass = '$password'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$fName = $row['blogger_name'];
if ($result->num_rows > 0) {
    if (!isset($_COOKIE["userName"])) {
        setcookie("userName", $fName, strtotime("1 months"), "/");
        setcookie("profileImage", $avater, strtotime("1 months"), "/");

        }
    $_SESSION['errorLog'] = null; // remove the error message 

    } else {
    $_SESSION["errorLog"] = "This user is not found";

    }
header("Location:index.php");