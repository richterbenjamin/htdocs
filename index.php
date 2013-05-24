<?php

require_once('php/include.php');

// is the one accessing this page logged in or not?

if ( !isset($_SESSION['logged-in']) !== true) {

// not logged in, move to login page

    header('Location: php/index_member.php');

    exit;

}

?>


<!DOCTYPE html>
<html> 
<head> 
	<title>CoffeeStar</title> 
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="themes/gogo.min.css" />
    
    
    
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js/script.js"></script>

</head> 
<body> 
 
<div data-role="page" id="index" >

	<div data-role="header" data-position="fixed">
		<h1>CoffeeStar</h1>
        <a href="contact.html" data-rel="dialog" data-transition="slidedown">Kontakt</a>

		<a href="php/login.php" data-rel="dialog" data-icon="plus" class="ui-btn-right" data-transition="slidedown" >Login</a>
	</div><!-- /header -->

	<div data-role="content">

	<div data-position="fixed" id="map"> </div>
    
    <div data-inset="false"   data-type="horizontal"  data-iconpos="notext" data-position="fixed" class="foot">
       <div class="hinweis"  >
        <p>Kaffeesüchtig? Willst du mehr als die Standard-Cafés in deiner Nähe? Dann melde dich an.</p>
       </div>
    <div data-role="collapsible"  data-inset="false"  data-collapsed-icon="arrow-u"  data-expanded-icon="arrow-d"  id="custom-collapsible" class="liste" data-collapsed="false">



        <h2 data-role="list-divider" role="heading" >Cafés in deiner Nähe</h2>
<ul data-role="listview" id="custom-list" class="liste">
            <li>
            	<a href="#" data-transition="slide">Cafe 01  </a>
              		 <p>Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien leben die Blindtexte.</p>
              		
              		 </li>
            	<li>
            	<a href="#">Cafe 02 </a>
                <p>Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien leben die Blindtexte.</p>
                </li>
            	<li><a href="#">Cafe 03</a>
                <p>Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien leben die Blindtexte.</p>
            
            
           </li>
           
</ul>
    </div><!-- /collapsible -->
    </div>


        <div data-role="footer" data-id="foo1" data-position="fixed">

        </div><!-- /footer -->
</div><!-- /footer -->	
			
	</div><!-- /index -->

</body>
</html>


