<?php

mysql_connect("mysql.hostinger.fr", "u587647107_blog" , "thomastelliez") or exit("Impossible de se connecter : ".mysql_error());
mysql_select_db("blog");
$connect=false;
if(isset($_COOKIE['sid']))
{
	$TestConnexion=$_COOKIE['sid'];
	//echo $TestConnexion;
	$sql="SELECT count(sid) as sid FROM utilisateur WHERE sid='$TestConnexion'";
	$requete= mysql_query("$sql");
	$ligne = mysql_fetch_array($requete);
	if($ligne['sid'])
	{
	$connect=true;
	}
	
}
else
{
	
}
?>