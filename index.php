<?php
function listf($patern) {
	$g = glob($patern);
	foreach($g as $f) {
		echo "<a href='$f' class='btn btn-primary btn-default btn-block'>$f</a>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Stage CQ</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="common/css/bootstrap.min.css" rel="stylesheet">
  <link href="common/css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="common/js/html5shiv.js"></script>
  <![endif]-->

  <link rel="shortcut icon" href="common/img/favicon.ico">

  <script type="text/javascript" src="common/js/jquery.min.js"></script>
  <script type="text/javascript" src="common/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
		  <div class="page-header">
		    <a href="/" style="text-decoration:none;color:black">
		      <h1>
			<img src="common/img/epitech.jpg" width="64" />
			Stage CQ
		      </h1>
		    </a>
		  </div>
		  <div class="tabbable" id="tabs-428857">
		    <ul class="nav nav-tabs">
			    <li class="active"><a href="#panel-pres" data-toggle="tab">Présentation</a></li>
			    <li><a href="#panel-crypto" data-toggle="tab">Cryptographie</a></li>
			    <li><a href="#panel-stega" data-toggle="tab">Stéganographie</a></li>
			    <li><a href="#panel-hash" data-toggle="tab">Hashing</a></li>
			    <li><a href="#panel-web" data-toggle="tab">Web</a></li>
			    <li><a href="#panel-social" data-toggle="tab">Social Engineering</a></li>
			  </ul>
			  <div class="tab-content">
			    <div class="tab-pane active" id="panel-pres">
			      <br />
			      <div class="jumbotron">
				<h1>Hello, world !</h1>
				<p>
				  Bienvenue au premier stage de CyberSécurité organisé par le Lab CQ d'EPITECH Toulouse<br/>
				  Relevez les différents challenges en équipe.<br/>
				  <br/>
				  Have Fun!<br/>
				  by hayato, mezzer, SiN and Tekkharibo
				</p>
			      </div>
			    </div>
			    <div class="tab-pane" id="panel-crypto">
			      <p>
				<br />
				<?php listf("crypto*"); ?>
			      </p>
			    </div>
			    <div class="tab-pane" id="panel-social">
			      <p>
				<br />
				<?php listf("social*"); ?>
			      </p>
			    </div>
			    <div class="tab-pane" id="panel-stega">
			      <p>
				<br />
				<?php listf("stega*"); ?>
			      </p>
			    </div>
			    <div class="tab-pane" id="panel-hash">
			      <p>
				<br />
				<?php listf("hash*"); ?>
			      </p>
			    </div>
			    <div class="tab-pane" id="panel-web">
			      <p>
				<br />
				<?php listf("web*"); ?>
				<br><br>
				Des petits bonus sont cachés pour les plus curieux :)
			      </p>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
