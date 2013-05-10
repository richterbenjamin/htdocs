<?php
require 'db.php';
$name = $_POST['name'];
$public = $_POST['public'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

if ($public !=0){
	$public = 1;
}

$sql = 'INSERT INTO
		 marker (name, public, lat, lng)
		 VALUES
		 (:name, :public, :lat, :lng)';
		 
		 
		
		$query = $db->prepare($sql);
		$query ->execute(array(
		'name' =>$name,
		'public' =>$public,
		'lat' =>$lat,
		'lng' =>$lng,
		
		));
?> 

<div id="success" data-role="dialog">
<div data-role="header"><h1>Punkt angelegt</h1></div>
<div data-role="content"><h1>Vielen Dank!</h1>
<p>Ihre Eingabe wurde gespeichert</p>
<a href="#index" data-role="button">Zur Karte</a>
</div>
</div>
