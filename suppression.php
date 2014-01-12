<?php 
require_once 'includes/connexion.inc.php';
include_once 'includes/header.inc.php';

if(isset($_GET["id_article"]))
{
	$id=$_GET['id_article'];
	$sql="DELETE FROM article WHERE id_article=$id";
	mysql_query($sql);
	header('refresh:2;index.php');
	}
	?>