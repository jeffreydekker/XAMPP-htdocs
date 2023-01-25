<?php

// checks if any form fields are left empty 
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) 
{
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// checks if the given username is a valid format with preg_match function
function invalidUid($username) 
{
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// checks if the email is a valid email format using FILTER_VALIDATE_EMAIL
function invalidEmail($email) 
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// checks if the passwords fields match
function pwdNotMatch($pwd, $pwdRepeat) 
{
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// checks if the username or the email exists within the db with prepared statements
function uidExists($conn, $username, $email) 
{ 
    // question mark is a placeholder for prepared statement to protect against SQL injection
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    // if function both sets and checks the prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();  
    }

    // bind the data from the user to the statement
    // second parameter is the format of the values in this case 2 strings
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    // finally execute the statement
    mysqli_stmt_execute($stmt);
    // store result from prepared statement and return false if it failed
    $resultData = mysqli_stmt_get_result($stmt);
    // fetch the data from db as assosicative array 
    // this if statement creates a variable while also 
    if ($row = mysqli_fetch_assoc($resultData)) {
        // returns the whole row in the db
        return $row;
    } else {
        $result = false;
        return $result;
    }
    // finish the prepared statement and close it off
    mysqli_stmt_close($stmt);
}

// creates a user within the db
function createUser($conn, $name, $email, $username, $pwd) 
{
    // using INSERT INTO, unlike the uidExists function
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    // checks for connection again
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();  
    }
    // saves a hashed version of the given password to prevent hackers to knowing all the passwords in our database
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
        exit();
}

// checks if form fields are empty for the login page
function emptyInputLogin($username, $pwd) 
{
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// logs the user in with their username or email by starting a session
function loginUser($conn, $username, $pwd) 
{
    // uidExists checks if the username or email matches a row in the db
    $uidExists = uidExists($conn, $username, $username);
    // checks if the data exists within the db
    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
    }
    // gets the hashed password from the uidExists assoc array
    $pwdHashed = $uidExists["usersPwd"];
    // checks if the password given by the user matches the hashed password  in the db
    $checkPwd = password_verify($pwd, $pwdHashed);
    // sends user back to login page if username or email does not exists within db
    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin ");
        // fetches the user from the db and starts a session
    } elseif ($checkPwd === true) {
        session_start();
        // session superglobal that fetches the result from uidExists function assoc array and binds it to the current session for the user
        $_SESSION["userid"] = $uidExists["usersId"];
        // same for the user ID:
        $_SESSION["useruid"] = $uidExists["usersUid"];
        // redirect back to the home page
        // on the wesbite go to profile page to see the current session is working
        header("location: ../index.php");
        exit();
    }
}