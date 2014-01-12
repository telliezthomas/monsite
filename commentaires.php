<?php
include_once('includes/connexion.inc.php');
include_once 'includes/header.inc.php';
?>

	<div class="span8">
<?php
//Page d'un article
$ID_article = $_GET['ID_article'];
$sql = ("SELECT * FROM article WHERE ID_article = '$ID_article'");
$requete = mysql_query ($sql);
$data = mysql_fetch_assoc ($requete);

echo "<h1> {$data["Titre"]}</h1>";
echo "<img src=\"img/$ID_article.jpg\" width=100%>";
echo "<p> {$data["Texte"]}</p>";

//Affichage des commentaires
$sql="SELECT * FROM commentaires WHERE ID_article='$ID_article'";
$requete = mysql_query ($sql);
while($data2=mysql_fetch_assoc($requete))
{
?><p><div class="badge" style="width:300;" ><?php
echo"<font color=red> {$data2["pseudo"]}</font>";?><br>
<?php echo"<font color=blue> {$data2["email"]}</font>";?><br>

<?php //limitation de la longueur du comentaire 
$text= wordwrap($data2["commentaire"],40,"<br/>");
echo "<p style='width: 40px'>$text</p>";
?></div><br></p><?php
}
//Module de remplissage de commentaire
?>

<form action="ajouter_com.php" method="post">
	Pseudo : <input type="text" name="pseudo"/><br>
	Email : <input type="text" name="email"/><br>
	Commentaire : <br> <textarea name="commentaire" style="width:300;height:100;"></textarea><br>
	<input type="submit" value ="envoyer"/>
	<input type="hidden" name="ID_Article" value="<?php echo $ID_Article ?>"/>
</form>
	
	</div>
<?php 	
include_once 'menu.inc.php'; //Menu navigation
include_once 'includes/footer.inc.php'; //Footer
?>
