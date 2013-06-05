<?php
require 'db.php';

$query = $db->prepare('SELECT name, lat, lng FROM kaffee_db');
$query->execute();
echo json_encode( $query->fetchAll() );
?>