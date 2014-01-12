<?php 	
require_once 'includes/connexion.inc.php'; 
include_once 'includes/header.inc.php';
include_once'suppression.php';
require("libs/Smarty.class.php");
$smarty = new Smarty();

if(!isset($_GET['recherche']))
{
?>       
          <div class="span8">
          
            <?php
				//compter nombre article pour definir nombre de pages
				$page=(isset ($_GET['page'])) ? $_GET['page']:1;
				$nbArticleParPage=2;
				$sql=("SELECT count(*) as nbarticle FROM article WHERE Statut=1");
				$result=mysql_query($sql);
				$data=mysql_fetch_array($result);
				$total=$data['nbarticle'];
				$nbTotalDePage= ceil($total/$nbArticleParPage);
				$debut=($page-1)*$nbArticleParPage;
				//Affichage des articles
				$sql=("SELECT ID_article, Titre, Texte, DATE_FORMAT(date,'%d/%m/%Y') as date_fr FROM article WHERE Statut=1 ORDER BY ID_article DESC LIMIT $debut, $nbArticleParPage");
				
				$requete = mysql_query($sql);
				
					while($ligne=mysql_fetch_array($requete)){
					$sql ="SELECT ID_article, Titre FROM article";
					$req = mysql_query ($sql);
					//lien renvoyant vers la page précise de l'article
					echo"<a href=\"commentaires.php?ID_article={$ligne["id_article"]}\"><h2>{$ligne["titre"]}</h2></a><br/>";
					$ida=$ligne["id_article"];
					echo "<img src=\"img/$ligne[id_article].jpg\" width=100%>";
					echo "<p>$ligne[texte]</p>";

					 $sql=("SELECT count(*) as nbcom FROM commentaires WHERE ID_article='$ida'");
					 $result= mysql_query($sql);
					 $tab=mysql_fetch_array($result);
					 $NbCommentaire=$tab['nbcom'];
					 echo "<p>Il y a $NbCommentaire commentaire(s)</p>";
					 if($NbCommentaire>0)
					 {
						echo"<a href=\"commentaires.php?ID_article={$ligne["id_article"]}\" color=black>Lire les commentaires</a><br/>";
					}
					else 
					{}
					if($connect==true)
					{
					//si utilisateur connecté possibilité de modifier ou supprimer article
					echo "<p><em>Publié le : $ligne[date_fr]</em><a href=\"article.php?id_article=$ligne[id_article]\">    Modifier</a> <a href=\"suppression.php?id_article=$ligne[id_article]\"> Supprimer</a></p>";
					}
					else
					{
					echo "<p><em>Publié le : $ligne[date_fr]</em></p>";
					}
				?><hr size="3" color="black"><?php
				
				}
				}
				else
				{ //même chose mais affichage des articles en fonction de la recherche
					$recherche=$_GET['recherche'];
					$page=(isset ($_GET['page'])) ? $_GET['page']:1;
					$nbArticleParPage=2;
					$sql=("SELECT count(*) as nbarticle from article where statut=1 AND (titre like '%$recherche%' or texte like '%$recherche%')");
					$result=mysql_query($sql);
					$data=mysql_fetch_array($result);
					$total=$data['nbarticle'];
					$nbTotalDePage= ceil($total/$nbArticleParPage);
					$debut=($page-1)*$nbArticleParPage;
					
					echo '<div class="span8">';
				 
				 	$sql="Select count(*) as nbarticle from article where statut=1 and (titre like '%$recherche%' or texte like '%$recherche%')";
					
					$result=mysql_query($sql);
					$data=mysql_fetch_array($result);
					$total = $data['nbarticle'];
					echo "Il y a $total resultat(s) à votre recherche";
					 
					 $sql = "SELECT id_article, titre, texte, DATE_FORMAT(date, '%d/%m/%Y') as date FROM article WHERE article.statut = 1 and (article.titre like '%$recherche%' or article.texte like '%$recherche%') ORDER BY date LIMIT $debut, $nbArticleParPage";
					 $requete = mysql_query($sql);
					 $sql=("SELECT count(*) as nbcommentaire FROM commentaires, article WHERE commentaires.IDArticle=article.id_article");
					 $NbCommentaire= mysql_query($sql);
					 while ($ligne = mysql_fetch_array($requete)){
					 $sql=("SELECT count(*) FROM commentaires WHERE ID_article=");
					 $NbCommentaire= mysql_query($sql);

					$sql ="SELECT ID_article, Titre FROM article";
					$req = mysql_query ($sql);
					echo"<a href=\"commentaires.php?ID_article={$ligne["id_article"]}\"><h2>{$ligne["titre"]}</h2></a><br/>";
						$sql="SELECT ID FROM commentaires WHERE ID_article={$ligne["id_article"]}";
						$req2= mysql_query ($sql);
						$ida=$ligne["id_article"];
						echo "<img src=\"img/$ligne[id_article].jpg\" width=100%>";
						echo "<p>$ligne[texte]</p>";
					 $sql=("SELECT count(*) as nbcom FROM commentaires WHERE ID_article='$ida'");
					 $result= mysql_query($sql);
					 $tab=mysql_fetch_array($result);
					 $NbCommentaire=$tab['nbcom'];
					echo "<p>Il y a $NbCommentaire commentaire(s)</p>";
					if($NbCommentaire>0)
					 {
						echo"<a href=\"commentaires.php?ID_article={$ligne["id_article"]}\" color=black>Lire les commentaires</a><br/>";
					}
					else 
					{}
						if($connect==true)
						{
							
							echo "<p><em>Publié le : $ligne[date]</em><a href=\"article.php?id_article=$ligne[id_article]\">    Modifier</a> <a href=\"article.php?id_article=$ligne[id_article]\"> Supprimer</a></p>";
						}
						else
						{
							echo "<p><em>Publié le : $ligne[date]</em></p>";
						}
	
					}?><hr size="3" color="black"><?php
				}
//Mise en page du nombre d'articles par pages
				for($i=1; $i<=$nbTotalDePage; $i++)
				{
					echo " <a href=\"index.php?page=$i\">$i</a>";
				}

?>
			
</div>
<?php 	
include_once 'menu.inc.php'; //Menu navigation
include_once 'includes/footer.inc.php'; //Footer
?>
          
		  
		  

      

