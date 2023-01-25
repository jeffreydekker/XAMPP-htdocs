<?php

// if statement checks if user got to this page the correct way
if (isset($_POST["submit"])) {
    //includes db connection
    require_once 'dbh.inc.php';
    // store the post method form fields in variables for usage
    // escape string functions ensures the form data doesnt get read as code for hackers
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    
    // includes functions that checks for correct form input and user creation in the db
    require_once 'functions.inc.php';
    
    // if a form field is not filled properly we GET an error in the url
    // functions are documented in functions.php in includes folder
    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (pwdNotMatch($pwd, $pwdRepeat)) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    // if all checks are false the user is created
    createUser($conn, $name, $email, $username, $pwd);

} else {
    // sends the user back to the sign up page if signup.inc.php is not correctly accessed
    header("location: ../signup.php");
    exit();
}