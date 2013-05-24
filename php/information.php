<?php
    $thisPage="index";
    include('../php/memberhead.inc.php');
?>



<div data-role="page"  <?php echo "id=\"".$thisPage."\""?> >

    <div data-role="header" data-position="fixed">
    
        <a  href="index_member.php" data-add-back-btn="true" >zurück</a>

        <a href="../php/logout.php"  data-icon="minus" class="ui-btn-right" data-transition="slidedown" >Logout</a>



        <h1>Information über das aktuelle Caffee</h1>
	</div><!-- /header -->

	<div data-role="content">
        <div>
<p>Hier findest du alle informatinen über Das Caffee NR 1</p>	
<p>Die Adresse an deiner Postion ist:</p>
<p id="geocodedAdress">Adresse wird ermittelt...</p>



<?php include('../php/datenbank.php'); ?>

 <a href="bewertung.php" data-role="button" class="ui-btn-right" data-transition="slidedown" >bewerte JETZT das Caffee!!!</a>



</div>




<?php include('../php/footer.inc.php'); ?>
