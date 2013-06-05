<?php
    $thisPage="addPoint";
    include('../php/memberhead.inc.php');
?>

<div data-role="page" <?php echo "id=\"".$thisPage."\""?> >

    <div data-role="header" data-position="fixed">

      <!--  <a href="../contact.html" data-rel="dialog"data-transition="slidedown">Kontakt</a>-->

        <a href="../php/logout.php"  data-icon="minus" class="ui-btn-right" data-transition="slidedown" >Logout</a>



        <h1>neues Cafe hinzufügen</h1>
	</div><!-- /header -->

	<div data-role="content">
        <div>
<p>Es wird deine aktuelle Position als neues Café hinzugefügt</p>

<form method="post" action="newcafe.php" id="addPointForm">
    <div data-role="fieldcontain">

    <input type="text" name="name" placeholder="Name des Cafe" required />


    <input type="text" name="inhaber" placeholder="Inhaber" required />
    <p>Die Adresse an deiner Position ist:</p>
    <textarea rows="7" cols="70" type="text" name="adresse" placeholder="Adresse des Cafés" required  id="geocodedAdress"></textarea>

    </div>



    <div data-role="fieldcontain">

        <select name="select-choice-1" id="select-choice-1" multiple="multiple" data-native-menu="false">
            <option>Das gibt es alles:</option>
            <option value="innen">Sitzplätze innen</option>
            <option value="aussen">Sitzplätze außen</option>
            <option value="essen">Essen</option>
            <option value="getraenke">Getränke (außer Kaffee)</option>
            <option value="cocktails">Cocktails</option>
        </select>
    </div>




   <!-- <div data-role="fieldcontain">
        <fieldset data-role="controlgroup">
            <legend>diese Dinge sind verfügbar</legend>
            <input type="checkbox" name="verfügbarkeit" id="verfügbarkeit_0" class="custom" value="1" />
            <label for="verfügbarkeit_0">Sitzplätze innen</label>
            <input type="checkbox" name="verfügbarkeit" id="verfügbarkeit_1" class="custom" value="1" />
            <label for="verfügbarkeit_1">Sitzplätze außen</label>
            <input type="checkbox" name="verfügbarkeit" id="verfügbarkeit_2" class="custom" value="1" />
            <label for="verfügbarkeit_2">Essen</label>
            <input type="checkbox" name="verfügbarkeit" id="verfügbarkeit_3" class="custom" value="1" />
            <label for="verfügbarkeit_3">Trinken (außer Kaffee)</label>
            <input type="checkbox" name="verfügbarkeit" id="verfügbarkeit_4" class="custom" value="1" />
            <label for="verfügbarkeit_4">Cocktails</label>
        </fieldset>
    </div>
-->

    <div data-role="fieldcontain">

        <select name="select-choice-2" id="select-choice-2" multiple="multiple" data-native-menu="false">
            <option>Wähle das Klientel aus:</option>
            <option value="hipster">Hipster</option>
            <option value="greise">Greise</option>
            <option value="business">Business</option>
            <option value="normalo">Normalo</option>
            <option value="joungster">Joungster</option>
        </select>
    </div>






<input type="hidden" name="lat" value"">
<input type="hidden" name="lng" value"">

<!--
<div data-role="fieldcontain">
   <label for="slider-2">Geschmack/Qualität</label>
   <input type="range" name="geschmack" id="slider-2" value="3" min="1" max="5" data-highlight="true" />
</div>
<div data-role="fieldcontain">
   <label for="slider-2">Essen/Getränke</label>
   <input type="range" name="drinking" id="slider-2" value="3" min="1" max="5"  data-highlight="true" />
</div>
<div data-role="fieldcontain" >

   <label for="slider-2">Ambiente/Bedienung</label>
   <input type="range" name="ambient" id="slider-2" value="3" min="1" max="5" data-highlight="true" />
</div>
<input type="text" name="Beschreibung" maxlength="150" placeholder="150-Zeichen-Beschreibung" required />
-->
<input type="submit" value="Cafe anlegen" >



</form>

        </div>
    </div>

        <?php include('../php/footer.inc.php'); ?>
