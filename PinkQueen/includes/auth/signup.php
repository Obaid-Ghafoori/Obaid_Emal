<?php

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

$email = $_POST["email"];
$password = $_POST["password"];
$password = password_hash($password, PASSWORD_DEFAULT);
$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];

$sql = "INSERT INTO users (email, password, first_name, last_name) VALUES ('$email', '$password', '$firstname', '$lastname')";
if ($conn->query($sql) === true) {

    // SEND EMAIL
    $email = $_POST["email"];

    $to      = $email;
    $subject = 'Welcome';

    $htmlContent = '
    <h4>Thank you for signing up</h4>
    <table cellspacing="0" style="width: 300px; height: 200px;">
        <tr>
            <th>E-mail:</th><td>'.$email.'</td>
        </tr>
        <tr>
            <th>E-mail:</th><td>'.$password.'</td>
        </tr>
    </table>';

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: Obaid<obaid@example.com>' . "\r\n";

    // Send email
    if(mail($to, $subject, $htmlContent, $headers)){
        echo 'ok';
    } else {
        echo 'No';
    }
    
}

?>