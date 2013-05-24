<?php

require_once('include.php');

$query = $db1->prepare('SELECT * FROM marker');
$query->execute();
echo json_encode( $query->fetchAll() );
 
?>