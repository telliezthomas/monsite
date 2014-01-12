<?php /* Smarty version Smarty-3.1.15, created on 2014-01-11 14:13:22
         compiled from "template\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:723152d14298051545-13732751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1330b55f35665f430ce9b8167feebce9b68bc0a' => 
    array (
      0 => 'template\\index.tpl',
      1 => 1389445991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '723152d14298051545-13732751',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52d14298239d29_21797327',
  'variables' => 
  array (
    'data_tab' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d14298239d29_21797327')) {function content_52d14298239d29_21797327($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_tab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
<h2><?php echo $_smarty_tpl->tpl_vars['data']->value['titre'];?>
</h2>

<img src="img/<?php echo $_smarty_tpl->tpl_vars['data']->value['id_article'];?>
.jpg"><br/>

<?php echo $_smarty_tpl->tpl_vars['data']->value['texte'];?>
<br/>

<?php echo $_smarty_tpl->tpl_vars['data']->value['date_fr'];?>



<br/>

<?php } ?>

<?php }} ?>
