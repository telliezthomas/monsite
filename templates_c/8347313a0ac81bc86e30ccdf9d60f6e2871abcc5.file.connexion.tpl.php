<?php /* Smarty version Smarty-3.1.15, created on 2014-01-11 14:13:55
         compiled from "template\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2724652d1439317cef1-97685949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8347313a0ac81bc86e30ccdf9d60f6e2871abcc5' => 
    array (
      0 => 'template\\connexion.tpl',
      1 => 1385473562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2724652d1439317cef1-97685949',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52d143931c9435_61179746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d143931c9435_61179746')) {function content_52d143931c9435_61179746($_smarty_tpl) {?> <div class="span8">
          
			<div class="badge">
			<h3>Connexion</h3>
			<ul>
			<form method="post" action="connexionUser.php" enctype="multipart/form-data">
			<dd>Adresse E-mail :</dd>			
			<dd><input type="text" name="email" style="border:solid 1px black;"></dd>
			<dd>Mot de Passe :</dd>
			<dd><input type="password" name="mdp" style="border:solid 1px black;"></dd>
			<dd><input type="submit" name="connexion" value="Se connecter"></dd>
			
			

          </div>
		  </div><?php }} ?>
