<?php

$servername = "localhost";
$dBUsername = "root";
// dbPassword is by default empty for xampp
$dBPassword = "";
// dbName is the same name in import.sql for phpmyadmin
$dBName = "loginsystem";

// variable gets used as connection to the database whenever a change is wanted in the db
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

// if connection to the db is false it prints an error message
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}