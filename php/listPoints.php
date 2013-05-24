<?php
require_once('../php/include.php');

$query = $coffestar->prepare('SELECT * FROM marker');
$query->execute();
echo json_encode( $query->fetchAll() );
echo "<p>fertig</p>";
 
?>