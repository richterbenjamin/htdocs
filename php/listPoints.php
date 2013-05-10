<?php
require'db.php';

$query = $db->prepare('SELECT * FROM marker');
$query-> execute();
echo json_encode($query->fetchAll());

