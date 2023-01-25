<?php 
    include_once 'header.php';
?>

<?php
// shows the logged in user by returning the useruid
if (isset($_SESSION["useruid"])) {
    echo "<h1 class='welcome'>Welcome " . $_SESSION["useruid"] . "</h1>";
} else {
    header("location: index.php?error=notsignedin");
}
?>

<?php
    include_once 'footer.php';
?>
