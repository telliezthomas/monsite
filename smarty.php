<?php
		require("libs/Smarty.class.php");

		$smarty=new Smarty();
		$monTexte="<p>Ma prem&egrave;re page smarty</p>";
		$smarty->assign("monTexte",$monTexte);
		$smarty->display("smarty.tpl");
		
		
		?>