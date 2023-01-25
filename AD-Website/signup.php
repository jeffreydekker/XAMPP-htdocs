<?php 
    include_once 'header.php';
?>
<br>
<br>

<?php
// errors we defined in functions.php invoking different behaviour 
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        } elseif ($_GET["error"] == "invaliduid") {
            echo "<p>Invalid username</p>";
        } elseif ($_GET["error"] == "invalidemail") {
            echo "<p>Invalid email</p>";
        } elseif ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords are not equal</p>";
        } elseif ($_GET["error"] == "stmntfailed") {
            echo "<p>Something went wrong, please try again</p>";
        } elseif ($_GET["error"] == "usernametaken") {
            echo "<p>Username already exists</p>";
        } elseif ($_GET["error"] == "none") {
            echo "<p>Thank you for signing up!</p>";
        }
    }
?>

<section class="signup-form">
<h2>Sign up</h2>
<!-- fires the signup inc file via the url which is in includes folder and submits form via post method which means it doesnt get shown in url-->
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="username" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat password...">
        <button type="submit" name="submit">Sign up</button>
    </form>
</section>

<?php
    include_once 'footer.php';
?>
