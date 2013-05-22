<?php $thisPage="option";
include('../php/memberhead.inc.php');
?>

<div data-role="page" <?php echo "id=\"".$thisPage."\""?> >

    <div data-role="header" data-position="fixed">

        <h1>Optionen</h1>
    </div><!-- /header -->



    <div data-role="content">
        <a href="../contact.html" data-role="button"  data-rel="dialog" data-transition="slidedown">Kontakt</a>

        <a href="logout.php"  data-role="button"  data-icon="minus" class="ui-btn-right" data-transition="slidedown" >Logout</a>
        <div>  Hier kannst du dann alles einstellen</div>








    <?php include('../php/footer.inc.php'); ?>

