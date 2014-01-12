<?php /* Smarty version Smarty-3.1.15, created on 2014-01-12 00:07:43
         compiled from "template\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:469352d1864945d029-94614244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c454322435b1cf253ad3b8caa3596c5fbc42df3a' => 
    array (
      0 => 'template\\article.tpl',
      1 => 1389480878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '469352d1864945d029-94614244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52d186496a7f78_46932336',
  'variables' => 
  array (
    'action_label' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d186496a7f78_46932336')) {function content_52d186496a7f78_46932336($_smarty_tpl) {?>

          <div class="span8">
			<div class="badge">

            
			<h2><?php echo $_smarty_tpl->tpl_vars['action_label']->value;?>
 un article</h2>
			
			<form method="post" action="article.php" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_article'];?>
" style="border:solid 1px black; ">
			<dd>Titre:</dd>
			<dd><input type="text" name="titre" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['titre'];?>
" style="border:solid 1px black; "></dd>
			
			<dd>Texte:</dd>			
			<dd><textarea name="texte" cols="50" rows="5" style="border:solid 1px black; "><?php echo $_smarty_tpl->tpl_vars['data']->value['texte'];?>
</textarea></dd>
			
			<dd>Image:</dd>			
			<dd><input type="file" name="image"></dd>
			
			<dd>Publié:</dd>
			<dd><input type="checkbox" name="statut"<?php if ($_smarty_tpl->tpl_vars['data']->value['statut']==1) {?>checked <?php }?>} value="1"></dd>
			
			<br><br>
			
			<dd><input href="index.php" type="submit" name=<?php echo $_smarty_tpl->tpl_vars['action_label']->value;?>
 value=<?php echo $_smarty_tpl->tpl_vars['action_label']->value;?>
 class="btn btn-large btn-primary" ></dd>
			
			
			<!-- Fin texte -->
			</div>
          </div>

		  <?php }} ?>
