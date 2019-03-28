<?php
session_start();

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

// Connect DB
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

$sql = "SELECT * FROM users WHERE email = '$email' ";

$result = mysqli_query($conn, $sql);  
if(mysqli_num_rows($result) > 0)  
{  
    while($row = mysqli_fetch_array($result)) {  
        if(password_verify($password, $row["password"]))  
        {  
            $_SESSION["user_is_logged_in"] = true;
            $_SESSION["user_firstname"] = $row["first_name"];
            $_SESSION["user_lastname"] = $row["last_name"];
            $_SESSION["user_email"] = $row["email"];

            $userIDCookie = "userID";
            $userID = $row["id"];
            setcookie($userIDCookie, $userID, time() + (86400 * 30), "/");

            echo 'ok';
        }
    }
} else {  
    echo 'No';
}

?>