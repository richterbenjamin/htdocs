<?php
require_once('db.php');

$name = $_POST['name'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$inhaber = $_POST['inhaber'];
$adresse = $_POST['adresse'];
$usersystem_id =  $_SESSION['user_id'];

$sql = "INSERT INTO
        kaffee_db (adresse, name, lat, lng, inhaber, usersystem_id)
        VALUES
        (:adresse, :name, :lat, :lng,  :inhaber, :usersystem_id)";


$query = $db->prepare($sql);

$query->execute(
    array(
        'name'   => $name,
        'lat'    => $lat,
        'lng'    => $lng,
        'adresse'    => $adresse,
        'inhaber'    => $inhaber,
        'usersystem_id'    => $usersystem_id

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
        <a href="index_member.php" data-role="button">Zur Karte</a>
    </div>
</div>







