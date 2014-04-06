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
  <!--
  A ne pas oublier d'enlever : password : lacqctropbien
  -->
<form id="slick-login">
<?php if (isset($_GET['password']) && $_GET["password"] != "lacqctropbien") { ?>
<p style="color:red;font-weight:bold;text-align:center">
Bien tenté, mais ce n'est pas ça.<br />Recommence juste ici :
</p>
<label for="password">mot de passe</label><input name="password" class="placeholder" placeholder="password" type="password">
<input value="Se connecter" type="submit">
<p style="color:white;font-weight:bold;text-align:center">
   <br>Astuce<br/><br>
   <iframe src="http://www.youtube.com/embed/p2YIP1_r5N8?start=24&amp;end=27&amp;autoplay=1" height="100" width="220"></iframe>
</p>
<?php } elseif(!isset($_GET['password'])) { ?>
<label for="password">mot de passe</label><input name="password" class="placeholder" placeholder="password" type="password">
<input value="Se connecter" type="submit">
<p style="color:white;font-weight:bold;text-align:center">
   <br>Astuce<br/><br>
   <iframe src="http://www.youtube.com/embed/p2YIP1_r5N8?start=24&amp;end=27&amp;autoplay=1" height="100" width="220"></iframe>
</p>
<?php
} else {
?>
<p style="color:green;font-weight:bold;text-align:center">
Bravo jeune padawan, tu as réussit la premiere epreuve!<br /> Voici ton token : TOKEN
</p>
<?php } ?>
</form>
</body></html>
