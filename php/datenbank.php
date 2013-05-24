<?php
require_once('include.php');

$db_sel = mysql_select_db( coffeestar )
   or die("Auswahl der Datenbank fehlgeschlagennnn");
 
$sql = "SELECT * FROM kaffee_db";
 
$db_erg = mysql_query( $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysql_error());
}
 
 
  while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
{
  
  echo "<p>". $zeile['kaffee_id'] . "</p>";
  echo "<p>". $zeile['name'] . "</p>";
  echo "<p>". $zeile['lat'] . "</p>";
  echo "<p>". $zeile['lng'] . "</p>";
  echo "<p>". $zeile['inhaber'] . "</p>";
}

 
 
mysql_free_result( $db_erg );
?>
