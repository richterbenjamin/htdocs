<?php
    $thisPage="addPoint";
    include('../php/memberhead.inc.php');
?>
<link href="http://code.jquery.com/mobile/1.0/jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js" type="text/javascript"></script>
<div data-role="page" <?php echo "id=\"".$thisPage."\""?> >

    <div data-role="header" data-position="fixed">

        <a href="../contact.html" data-rel="dialog"data-transition="slidedown">Kontakt</a>

        <a href="../php/logout.php"  data-icon="minus" class="ui-btn-right" data-transition="slidedown" >Logout</a>



        <h1>neues Cafe hinzufügen</h1>
	</div><!-- /header -->

	<div data-role="content">
        <div>
<p>Es wird deine aktuelle Position als neuer Punkt eingefügt</p>	
<p>Die Adresse an deiner Postion ist:</p>
<p id="geocodedAdress">Adresse wird ermittelt...</p>

<p>Bitte geben sie den Namen des Caffees ein</p>



	<div data-role="fieldcontain">
	  <label for="textinput2">Bitte gib den Namen des Caffees ein:</label>
	  <input type="text" name="Caffeename" id="caffeename" value=""  />
  	</div>
	<div data-role="fieldcontain">
	  <label for="textinput">Bitte gib den Ort des Caffees ein:</label>
	  <input type="text" name="Caffeeort" id="caffeeort" value=""  />
      </div>
      <div data-role="fieldcontain">
  <fieldset data-role="controlgroup">
    <legend>diese Dinge sind verfügbar</legend>
    <input type="checkbox" name="verfügbarkeit" id="verfügbarkeit_0" class="custom" value="" />
    <label for="verfügbarkeit_0">Sitzplätze innen</label>
    <input type="checkbox" name="verfügbarkeit" id="verfügbarkeit_1" class="custom" value="" />
    <label for="verfügbarkeit_1">Sitzplätze innen</label>
    <input type="checkbox" name="verfügbarkeit" id="verfügbarkeit_2" class="custom" value="" />
    <label for="verfügbarkeit_2">Essen</label>
    <input type="checkbox" name="verfügbarkeit" id="verfügbarkeit_3" class="custom" value="" />
    <label for="verfügbarkeit_3">Trinken</label>
    <input type="checkbox" name="verfügbarkeit" id="verfügbarkeit_4" class="custom" value="" />
    <label for="verfügbarkeit_4">Cocktails</label>
  </fieldset>
</div>
<div data-role="fieldcontain">
  <label for="textarea"></label>
  <textarea cols="4" rows="8" name="textarea" id="textarea"></textarea>
</div>


<div data-role="fieldcontain">
  <label for="selectmenu" class="select">Klientel:</label>
  <select name="selectmenu" id="selectmenu">
    <option value="option1">Hipster</option>
    <option value="option2">Greise</option>
    <option value="option3">Business</option>
    <option value="option4">Normalo</option>
    <option value="option5">Joungster</option>
  </select>
<form> 

            <input type="hidden" name="lat" value="">
            <input type="hidden" name="lng" value="">
</form>


</div>
    
</div>

<?php include('../php/footer.inc.php'); ?>
