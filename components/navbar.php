<script src="../jQuery/jQuery.js">

</script>
<script>
    $(document).ready(function () {
        $(".avater").click(function () {
            window.location.href = "../Logout/index.php";





            //REMEBER TO REPLACE THIS
        })
    })
</script>
<link rel="stylesheet" href="navbar.css">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <!-- put the menu button on the left of the logo -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <img class="navbar-brand" src="../images/logo.svg"> -->
        <h1 class="navbar-brand mb-5">
            BLOGCODE
        </h1>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="../Blogging/index.php">Blogging<a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Homepage/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Login/index.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Register/index.php">Register</a>
                </li>

            </ul>
        </div>


        <img class="avater mb-3" src=<?php
        if (isset($_COOKIE["userPhoto"])) {
            echo "..\uploads\avatars\\" . $_COOKIE["profileImage"];
        } else {
            echo "../uploads/avatars/";
            // the address or the url will be for the main page not the smallest one
        }
        ?> style="width:50px;height:50px;border-radius:50px;margin-right:100px;">


    </div>
</nav>