<?php
require_once('include.php');

$name = $_POST['name'];
$public = $_POST['public'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

if ($public != 0) {
    $public = 1;
}

$sql = 'INSERT INTO
        marker (name, public, lat, lng)
        VALUES
        (:name, :public, :lat, :lng)';


$query->execute(
    array(
        'name'   => $name,
        'public' => $public,
        'lat'    => $lat,
        'lng'    => $lng
    )
);

?>


<div data-role="dialog" id="success">
    <div data-role="header">
        <h1>Punkt angelegt</h1>
    </div>
    <div data-role="content">
        <h1>Und so schließt sich der Kreis!</h1>

        <p>Ihre Eingabe wurde gespeichert!</p>
        <a href="#index" data-role="button">Zur Karte</a>
    </div>
</div>







