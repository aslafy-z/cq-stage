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
<script type="text/javascript" src="my_script.js"></script>
</head>
<body>
<form id="slick-login" onsubmit="return false;">
<?php if (!isset($_GET["scoring"])) { ?>
<label for="password">mot de passe</label><input name="password" class="placeholder" placeholder="password" type="password" id="password">
<input value="Se connecter" type="submit" onclick="verifi_password($('#password').val())">
<p style="color:white;font-weight:bold;text-align:center">
   <br>Astuce<br/><br>
   <iframe src="http://www.youtube.com/embed/p2YIP1_r5N8?start=24&amp;end=27&amp;autoplay=1" height="100" width="220"></iframe>
</p>
<?php } else { ?>
<p style="color:green;font-weight:bold;text-align:center">
   <br>Bravo !<br/><br>
   Le flag pour cette épreuve était : FLAG.<br>
   Continue comme ça !
</p>
<?php } ?>
</form>
</body></html>
