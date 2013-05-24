<?php

session_start();


$host = "localhost";

$username = "root";

$password = "root";

$db = "coffeestar";

$db1 = new PDO("mysql:host=localhost;dbname=simplegeo", 'root', 'root', array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION)
    );


@mysql_connect($host,$username,$password) or die ("Datenbankfehler");

@mysql_select_db($db) or die("error");

?>