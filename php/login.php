<?php

require_once('include.php');

$error = '';

$form = $_POST['submit'];

$usr = $_POST['usr'];

$pswd = $_POST['pswd'];

if( isset($form) ) {

    if( isset($usr) && isset($pswd) && $usr !== '' && $pswd !== '' ) {


        $sql = mysql_query("SELECT * FROM `usersystem` WHERE usr='$usr' and pswd='$pswd';");

        if( mysql_num_rows($sql) != 0 ) { //success

            $_SESSION['logged-in'] = true;

            header('Location: ../php/index_member.php');

            exit;

        } else { $error = "Incorrect login info"; }

    } else { $error = 'All information is not filled out correctly';}

}

?>






</body>

</html>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>CoffeeStar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../themes/gogo.min.css" />

    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="../js/script.js"></script>
</head>
<body>

<div data-role="dialog" id="login">
    <div data-role="header">
        <h1>Login</h1>
    </div>
    <div data-role="content">



        <form action="<?php $PHP_SELF; ?>" method="post" >
            <input name="usr" type="text" value="<?php echo "$usr";?>" placeholder="Name" required="required"/>
            <input type="password" name="pswd" placeholder="Passwort" required="required" />

            <input name="submit" type="submit" value="Login"  data-inline="true" data-rel="dialog" data-transition="slidedown"/>

            <a href="../index.php" data-role="button" data-inline="true" data-rel="dialog" data-transition="slidedown">Abbrechen</a>
        </form>


        <?php

        echo "<br /><span style=\"color:red\">$error</span>";

        ?>
    </div>
</div>

</body>
</html>