<?php
	if (isset($_POST['pass']) && isset($_POST['send']))
	{
		if ($_POST['pass'] == "lacqctropbien")
		{
		   echo "Bravo jeune padawan, tu as réussit la premiere epreuve!<br /> Voici ton token : TOKEN";
		}
		else
		{
			echo "Bien tenté, mais ce n'est pas ça. Recommence en cliquant sur ce <a href=\"index.html\">lien</a>";
		}
	}
	else
	{
		echo "Alors comme ca on essaye d'acceder directement à cette page sans essayer de donner le mot de passe?<br />
		Bon aller... Je t'excuse, mais ne recommence plus ;)<br />
		Vas sur cette <a href=\"index.html\">page</a>";
	}
?>