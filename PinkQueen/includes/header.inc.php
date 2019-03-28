 <!-- $main_menu_items = ['Home', 'About us', 'Services', 'Gallery', 'Contacts', 'Make an appointment']; -->
 <!-- $sub_menu_items = ['About us' => ['About us', 'FAQ'], 'Services' => ['Hairstyling', 'Makeup']]; -->
<?php 
session_start();

include('includes/dbconnect.php'); 
 
?>
<head>
    <title>Pink Queen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>
</head>