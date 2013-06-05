<?php
$thisPage="addPoint";
include('../php/memberhead.inc.php');
?>




<div data-role="page" data-theme="b" data-fullscreen="false" <?php echo "id=\"".$thisPage."\""?> >

    <div data-role="header" data-position="fixed">

        <a  href="information.php" data-add-back-btn="true" >zurück</a>

        <a href="../php/logout.php"  data-icon="minus" class="ui-btn-right" data-transition="slidedown" >Logout</a>



        <h1>neues Cafe hinzufügen</h1>
    </div><!-- /header -->


    <div data-role="content">
        <div>
            <p>Es wird deine aktuelle Position als neuer Punkt eingefügt</p>
            <p>Die Adresse an deiner Postion ist:</p>
            <p id="geocodedAdress">Adresse wird ermittelt...</p>

            <form method="post" action="newPoint.php" id="addPointForm">
                <input type="text" name="name" placeholder="Name des Cafe" required />

                <input type="hidden" name="lat" value"">
                <input type="hidden" name="lng" value"">

                <select name="public" data-role="slider">
                    <option value="1">öffentlich</option>
                    <option value="0">privat</option>
                </select>

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
                <input type="text" name="Beschreibung" placeholder="du hast 150 Zeichen frei um das Café näher zu beschreiben..." required />

                <input type="submit" value="Cafe eintragen">



            </form>



        </div>

        <?php include('../php/footer.inc.php'); ?>
