<?php
session_start();
$hostname = getenv("DB_HOST");
$password = getenv(name: "DB_PASSWORD");
$username = getenv(name: "DB_USER");
$dbname = getenv(name: "DB_NAME");
$table = "blogname";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['name'];
    $lastName = $_POST['lname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $profileImageName = $_FILES["image"]['name'];
    $profileImageTemp = $_FILES["image"]['tmp_name'];
    // if ($profileImageName == "") {
    //     $_SESSION["error"] = null;
    //     $_SESSION["error"] = "Required an Profile Image";
    //     header("Location:index.php");

    // }

    $avater = rand(0, 100000) . "_" . $profileImageName;
    move_uploaded_file($profileImageTemp, "uploads/avatars/" . $avater);
    $image = "try";
    $randomizer = rand(0, 10000);
    $fullName = "$firstName $lastName";
    }
// Checking if the user already exists
$sql = "SELECT * FROM blogname where blogger_email = '$email'";
if (($conn->query($sql)->num_rows > 0)) {
    $_SESSION['errorReg'] = "User already exists";
    } else {
    $sql = "insert into blogname (blogger_id,blogger_name,blogger_email,blogger_pass,blogger_photo) values ('$randomizer','$fullName','$email','$password','$avater')";
    $result = $conn->query($sql);
    if (!isset($_COOKIE["userName"])) {
        setcookie("userName", $fullName, strtotime("1 months"), "/");
        setcookie("profileImage", $avater, strtotime("1 months"), "/");
        }
    }
header("Location:index.php");
