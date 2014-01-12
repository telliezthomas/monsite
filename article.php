<?php require_once 'includes/connexion.inc.php';
		require("libs/Smarty.class.php");
		$smarty = new Smarty();
	if($connect ==false)
	{
	//utilisateur non connecté, redirection
		echo 'Vous ne passerez pas !';
		
		header('refresh:1;index.php');
	}
	else
	{
	//ajout d'un article
	if (isset($_POST['Ajouter'])) {
	$titre = $_POST['titre'];
	$texte = $_POST['texte'];
	$date = date("Y-m-d");
	$statut = (!empty($_POST['statut'])) ? $_POST['statut'] : 0;
	//insertion d'une nouvelle ligne dans la base
	$sql = "INSERT INTO article (date, titre, texte, statut) VALUES ('$date','$titre', '$texte', '$statut')";
	if (!empty($_POST['image'])) {
	
		$erreur_image = $_FILES['image']['error'];
		
	} else {
		$erreur_image = "";
	}
	if ($erreur_image){
		echo "$erreur_image";
		}
		else{
		mysql_query($sql);  
		$id = mysql_insert_id();
	
	//upload de l'image dans le dossier
	move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/$id.jpg");
	header('Location:index.php');
	   }       
	
} 
else
{
//modification d'un article
	if (isset($_POST['Modifier'])) {
	$id = $_POST['id'];
	$titre = $_POST['titre'];
	$texte = $_POST['texte'];
	$date = date("Y-m-d");
	$statut = (!empty($_POST['statut'])) ? $_POST['statut'] : 0;
	
	$sql = "UPDATE article SET titre='$titre', texte='$texte',  statut='$statut' WHERE id_article='$id'";
	
	mysql_query($sql);  
	}
	//suppression d'un article
	if(isset($_POST['Supprimer'])){
	$id=$_POST['id'];
	$sql="DELETE id_article, texte, titre, statut FROM  article WHERE id_article='$id'";
}	
	

if (isset($_GET['id_article'])) {
	  // vos variables
	  $id = $_GET['id_article'];
	  $sql = "SELECT * FROM article WHERE id_article = $id";
	  $requete = mysql_query("$sql");
	  $data = mysql_fetch_array($requete);
	  extract($data);
	  
	  }else {
		$data = array("id_article" => NULL, "titre" => "", "texte" => "", "date" => "", "statut" => "");
		}
		
		$action_label = (!empty($_GET['id_article'])) ? 'Modifier' : 'Ajouter';
		$smarty->assign("data",$data);
		$smarty->assign("action_label",$action_label);
		
		include_once 'includes/header.inc.php'; //Header 
		$smarty->display('template/article.tpl');
		include_once 'menu.inc.php'; //Menu navigation
		include_once 'includes/footer.inc.php'; //Footer
		
		}}
?>
          

      

