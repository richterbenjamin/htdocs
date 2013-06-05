
<?php
session_start();
include('memberhead.inc.php')



?>


<?php

$thisPage="index";

?>



<div data-role="page" <?php echo "id=\"".$thisPage."\""?>>

    <div data-role="header" data-position="fixed">

<!--        <a href="../contact.html" data-rel="dialog"data-transition="slidedown">Kontakt</a>-->

        <a href="logout.php"  data-icon="minus" class="ui-btn-right" data-transition="slidedown" >Logout</a>

        <h1>CoffeeStar</h1>
    </div><!-- /header -->



    <div data-role="content" >

	<div data-position="fixed" id="map"> </div>

<?php
$sql = "SELECT * FROM `kaffee_db`";



$result = mysql_query($sql);
?>




<div data-inset="false"   data-type="horizontal"  data-iconpos="notext" data-position="fixed">
    <div data-role="collapsible"  data-inset="false"  data-collapsed-icon="arrow-u"  data-expanded-icon="arrow-d"  id="custom-collapsible" class="Caffeeliste" data-collapsed="true">
<h2 data-role="list-divider" role="heading" >Cafés in deiner Nähe</h2>
<?php
    echo "<ul data-role=\"listview\" id=\"custom-list\" class=\"caffeeliste\">";

$x = 0;
    while ($x < 3)
     {$cafe = mysql_fetch_array($result);

    $x++;

        echo "<li>";
           echo  "<a href=\"#\" data-transition=\"slide\">".$cafe["name"]."</a>";
            echo "<p>".$cafe["adresse"]."</p>";

        echo "</li>";

         if ($x==5) break;
    };

        echo "</ul>";
?>


    </div><!-- /collapsible -->
    </div>



    <?php include('footer.inc.php'); ?>





