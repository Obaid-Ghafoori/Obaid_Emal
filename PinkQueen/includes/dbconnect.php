<?php

// Localhost
if ( $_SERVER["SERVER_ADDR"] == '::1' ) {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "pinkqueendb";
// Remote Host
} else if ( $_SERVER["SERVER_ADDR"] === '192.168.15.70' ) {
    $servername = "studmysql01.fhict.local";
    $username = "dbi395367";
    $password = "Fontys@123!";
    $dbname = "dbi395367";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>