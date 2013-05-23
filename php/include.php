<?php

session_start();


$host = "localhost";

$username = "root";

$password = "root";

$db = "coffeestar";

@mysql_connect($host,$username,$password) or die ("Datenbankfehler");

@mysql_select_db($db) or die("error");

?>