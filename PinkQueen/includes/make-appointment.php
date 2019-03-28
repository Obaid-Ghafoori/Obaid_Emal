<?php 

if(!isset($_COOKIE["userID"])) {
	return;
} else {
	$userID = $_COOKIE["userID"];
	$selectedDate = $_POST["date"];
	$selectedTime = $_POST["time"];
	$remarks = $_POST["remarks"];

	$dateString = explode(".", $selectedDate);

	$day = $dateString[0];
	$month = $dateString[1];
	$year = substr($dateString[2], -2, 2);

	$formattedDate = $year . '.' . $month . '.' . $day;

	// echo ($day . "<br />");
	// echo ($month . "<br />");
	// echo ($year . "<br />");
	// echo $formattedDate;

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

	$sql = "INSERT INTO appointments (appointmentDate, appointmentTime, userID, remarks) 
			VALUES ('$formattedDate', '$selectedTime', '$userID', '$remarks')";

	if ($conn->query($sql) === true) {
		echo "Success";
	}
	else {
		echo "Failure";
	}
}



?>