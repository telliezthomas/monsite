<?php
include_once 'includes/connexion.inc.php';
include_once 'includes/header.inc.php';
?>
<div class="span8">
<?php
//Module de création de commentaires dans la bdd
	$pseudo=$_POST['pseudo'];
	$email=$_POST['email'];
	$commentaire=$_POST['commentaire'];
	$ID_Article=$_POST['ID_Article'];
	$AddCom ="INSERT INTO `commentaires`(`ID`, `pseudo`, `email`, `commentaire`, `ID_Article`) VALUES ('','$pseudo','$email','$commentaire','$ID_Article')";
	$requete = mysql_query($AddCom);


	echo "Votre commentaire a été publié";
	header('refresh:1;index.php');
	?>
</div>

<?php 	
include_once 'menu.inc.php'; //Menu navigation
include_once 'includes/footer.inc.php'; //Footer
?>
