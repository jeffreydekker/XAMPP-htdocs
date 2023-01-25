<?php

// in order to access the session super global we need to have a session running
// because this header is included in every page of the website the session carries over to all the pages
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DREAMERS Inc.</title>
    <link rel="shortcut icon" type="" href="images/AD-logo-small.ico">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="../AD-Website/css/style.css">
</head>
<body class="main-body">
    <header>
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="index.php"><img src="images/AD-logo-small.png" class="navlogo" alt="Among dreamers logo link to homepage"></a></li>
                    <li><a href="index.php" class="navhome">Home</a></li>
                    <li><a href="blog.php" class="navblogs">AD Music</a></li>
                    <?php
                    // if the user is logged in the nav bar changes accordingly
                    if (isset($_SESSION["useruid"])) {
                        echo "<li><a href='profile.php'>Profile page</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                        // else the nav bar shows that you can log in or sign up
                    } else {
                        echo "<li><a href='signup.php'>Sign Up</a></li>";
                        echo "<li><a href='login.php'>Log In</a></li>";
                    }
                    ?> 
                </ul>
            </nav>
        </div>
    </header>