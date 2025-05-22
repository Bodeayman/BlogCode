<?php

setcookie("profileImage", $_COOKIE["profileImage"], time() - 1, "/");
setcookie("userName", $_COOKIE["userName"], time() - 1, "/");
header("Location:../Homepage/index.php");