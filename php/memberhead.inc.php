<?php

require_once('../php/include.php');

// is the one accessing this page logged in or not?

if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {

// not logged in, move to login page

    header('Location: ../index.php');

    exit;

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>CoffeeStar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../themes/gogo.min.css" />



    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="../js/script.js"></script>

</head>
<body>
