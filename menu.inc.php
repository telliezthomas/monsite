<div class="span4">
<h3>Menu</h3>
<ul>
<form method="get" action="index.php" enctype="multipart/form-data">
<input type="text" name="recherche" style="border:solid 1px black;">
<input type="submit" name="" value="Envoyer" class="btn btn-large btn-primary">
<li><a href="index.php">Accueil</a></li>
<li><a href="article.php">Rédiger un article</a></li>
<?php 
if($connect==true)
{
?>
<li><a href="DeconnexionUser.php">Deconnexion Utilisateur</a></li>
<?php
}
else
{
?>
<li><a href="connexionUser.php">Connexion Utilisateur </a></li>
<?php } ?></form>
</ul>

</div></div>

