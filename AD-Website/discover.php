<?php

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
    <link rel="stylesheet" href="../Eindproject/css/style.css">
</head>
<body class="universe-body">
    <header class="universe-body">
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="index.php"><img src="images/AD-logo-small.png" class="navlogo" alt="Among dreamers logo link to homepage"></a></li>
                    <li><a href="index.php" class="navhome">Home</a></li>
                    <li><a href="store.php" class="navstore">Store</a></li>
                    <li><a href="discover.php" class="navabout">Universe</a></li>
                    <li><a href="blog.php" class="navblogs">AD Music</a></li>
                    <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<li><a href='profile.php'>Profile page</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                    } else {
                        echo "<li><a href='signup.php'>Sign Up</a></li>";
                        echo "<li><a href='login.php'>Log In</a></li>";
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>

    <div class="universe-body">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque placeat nostrum magnam, architecto magni exercitationem minima, similique sit, aliquam velit asperiores! Ea sunt consequuntur tempora totam in repellat ab enim?
            Numquam nesciunt aliquid dolor vel nostrum est odit inventore quaerat, obcaecati itaque? Ex dicta, voluptate magnam officiis aspernatur ut. Necessitatibus quos sed ut expedita architecto. Pariatur amet vero tenetur inventore.
            Quo asperiores voluptas natus eum maxime, itaque quae ullam quisquam ipsa soluta cum animi velit quasi, non commodi ducimus! Quidem eum perferendis cum ratione numquam, maiores necessitatibus enim id esse!
        </p>
    </div>

<?php
    include_once 'footer.php';
?>
