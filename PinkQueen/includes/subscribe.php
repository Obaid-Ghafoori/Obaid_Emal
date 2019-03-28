<?php

// SAVE EMAIL TO NEWSLETTER TABLE
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

$checkSQL = "SELECT * FROM newsletter WHERE email = ('$email')";

if ($result = mysqli_query($conn,$checkSQL))
{
  $rowcount=mysqli_num_rows($result);
  
  if ($rowcount == 0) {
        $sql = "INSERT INTO newsletter (email) VALUES ('$email')";
        if ($conn->query($sql) === true) {
            // New record created successfully
            // SEND EMAIL
            $email = $_POST["email"];

            $to      = $email;
            $subject = 'Thank you for subscribing to our newsletter!';

            $htmlContent = '
            <h4>You have successfully subscribed to our newsletter.</h4>
            <table cellspacing="0" style="width: 300px; height: 200px;">
                <tr>
                    <th>Your email: </th><td>'.$email.'</td>
                </tr>
            </table>';

            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Additional headers
            $headers .= 'From: Pink Queen<no-reply@pinkqueen.nl>' . "\r\n";

            // Send email
            if(mail($to, $subject, $htmlContent, $headers)){
                echo 'ok';
            } else {
                echo 'No';
            }
        }
        else {
            return;
        }
  }
  else {
    echo "No";
  }

  mysqli_free_result($result);
}
// $result = $conn->query($checkSQL);

// if ($result->fetchColumn() != 0) {
//     echo 'No';
//     return;
// }



?>