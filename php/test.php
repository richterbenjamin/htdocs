<?php
include('memberhead.inc.php');


$sql = "SELECT * FROM `usersystem`";



$result = mysql_query($sql);

while ($user_id = mysql_fetch_array($result))
{


    echo $user_id["user_id"];


}






?>
