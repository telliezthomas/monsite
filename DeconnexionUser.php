<?php 	require_once 'includes/connexion.inc.php'; 
		include_once 'includes/header.inc.php'; //Header 
		require("libs/Smarty.class.php");
		    setcookie('sid',' ',time()-1);
			header('Location:index.php');
		include_once 'menu.inc.php'; //Menu navigation
		include_once 'includes/footer.inc.php'; //Footer

		?>