<?php  $thisPage="search";
include('../php/memberhead.inc.php')
?>

<div data-role="page" <?php echo "id=\"".$thisPage."\""?> >

    <div data-role="header" data-position="fixed">

<!--        <a href="../contact.html" data-rel="dialog"data-transition="slidedown">Kontakt</a>-->

        <a href="logout.php"  data-icon="minus" class="ui-btn-right" data-transition="slidedown" >Logout</a>
		<h1>Suche</h1>

	</div><!-- /header -->
<div data-role="content">
	<div>
<label for="search-basic">Suche ein Caffee an einem bestimmten Ort:</label>
<input type="search" name="search" id="search-basic" value="" />

<p> oder nutze die Umkreissuche um Caffes in deiner Umgebung zu finden:</p>

<a href="../index.html" data-role="button">Umgebungssuche</a>
</div>

    </div>
    <?php include('../php/footer.inc.php'); ?>






