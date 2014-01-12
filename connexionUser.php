<?php 	require_once 'includes/connexion.inc.php'; 
		include_once 'includes/header.inc.php'; //Header 
		require("libs/Smarty.class.php");
		$smarty = new Smarty();
if(isset($_POST['connexion'])){
//Verification du compte
		  $email=$_POST['email'];
		  $mdp=$_POST['mdp'];
		  $sql = "SELECT * FROM utilisateur WHERE email='$email' and mdp='$mdp'";
		  $requete = mysql_query($sql);
//Utilisateur connecté, et mise en place du cookie		 
		  if($data=mysql_fetch_array($requete)){
			$sid=md5($data['email'].time()); 
		    setcookie('sid',$sid,time()+5*60);//20min
			$sql = "UPDATE utilisateur SET sid='$sid' WHERE email='$email'";
			$requete = mysql_query($sql);
			$connect=true;
			echo"Connexion en cours...";
			header('refresh:1;index.php');
		  }
		  else
		  {
			echo"erreur connexion";
			header('refresh:3;index.php');
		  }
} 
else{
		include_once'includes/header.inc.php';
		$smarty->display('template/connexion.tpl');
		}?>
		<?php 		
		include_once 'menu.inc.php'; //Menu navigation
		include_once 'includes/footer.inc.php'; //Footer
		?>