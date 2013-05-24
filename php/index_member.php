
<?php

include('memberhead.inc.php')



?>


<?php

$thisPage="index";

?>

<div data-role="page" <?php echo "id=\"".$thisPage."\""?> >

    <div data-role="header" data-position="fixed">
    
<!--        <a href="../contact.html" data-rel="dialog"data-transition="slidedown">Kontakt</a>-->

<!--        <a href="logout.php"  data-icon="minus" class="ui-btn-right" data-transition="slidedown" >Logout</a>-->

        <h1>CoffeeStar</h1>
    </div><!-- /header -->



    <div data-role="content" >

	<div  data-position="fixed" id="map"> </div>

<div data-inset="false"   data-type="horizontal"  data-iconpos="notext" data-position="fixed">
	<div data-role="collapsible"  data-inset="false"  data-collapsed-icon="arrow-u"  data-expanded-icon="arrow-d"  id="custom-collapsible" class="Caffeeliste" data-collapsed="false">
<h2 data-role="list-divider" role="heading" >Cafés in deiner Nähe</h2>
<ul data-role="listview" id="custom-list" class="caffeeliste">
            <li>
            	<a href="information.php" data-transition="slide">Cafe 01</a>
				<?php include('../php/datenbank.php'); ?>

            </li>
            	
            <li>
            	<a href="information.php" information.php>Cafe 0</a>
              	  <p>Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien leben die Blindtexte.</p>
            </li>
            <li><a href="information.php" information.php >Cafe 03</a>
             	   <p>Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien leben die Blindtexte.</p>
            </li>
 </ul>
    </div><!-- /collapsible -->
    </div>



    <?php include('footer.inc.php'); ?>
    
 




