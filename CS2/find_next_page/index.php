<!DOCTYPE html>
<html class=" js no-flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" style=""><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Connection à l'administration</title>
<meta name="description" content="slick Login">
<meta name="author" content="Webdesigntuts+">
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="jquery-latest.js"></script>
<script src="modernizr-latest.js"></script>
<script type="text/javascript" src="placeholder.js"></script>
</head>
<body>
<form id="slick-login">
<?php if (isset($_GET['password']) && $_GET["password"] != "LEMOTDEPASSEADMIN") { ?>
<p style="color:red;font-weight:bold;text-align:center">
Identifiants incorrects.<br />Connexion interrompue.
<!-- <a href="http://tekkharibo.eu/stage_cq/CS/find_next_page/password-lost.php?utilisateur=Administrateur">Récuperer mon mot de passe</a>-->
</p>
<label for="username">nom d'utilisateur</label><input name="username" class="placeholder" value="Administrateur" type="text" readonly="readonly">
<label for="password">mot de passe</label><input name="password" class="placeholder" placeholder="password" type="password">
<input value="Se connecter" type="submit">
<?php } elseif(!isset($_GET["password"])) { ?>
<label for="username">nom d'utilisateur</label><input name="username" class="placeholder" value="Administrateur" type="text" readonly="readonly">
<label for="password">mot de passe</label><input name="password" class="placeholder" placeholder="password" type="password">
<input value="Se connecter" type="submit">
<?php
} else {
?>
<p style="color:green;font-weight:bold;text-align:center">
Mot de passe valide !<br>
Le flag est :
<script>
// LEFLAG
</script>
<?php } ?>
</p>
</form>

</body></html>
