<?php 
    include_once 'header.php';
?>

<br>
<br>

<section class="signup-form">
<h2>Log in</h2>
<div>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="submit">Log In</button>
    </form>
</section>

<?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        } elseif ($_GET["error"] == "wronglogin") {
            echo "<p>Either your username or email didn't match each other!</p>";
        } 
    }
?>

<?php
    include_once 'footer.php';
?>
