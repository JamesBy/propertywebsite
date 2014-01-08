<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 19:34:07
         compiled from "application\views\smarty\templates\master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19916526583c80d2f08-51780654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9a9eaa20307a3a7d7207eee8bf975fab56afdac' => 
    array (
      0 => 'application\\views\\smarty\\templates\\master.tpl',
      1 => 1387650735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19916526583c80d2f08-51780654',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_526583c82ea182_09864283',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526583c82ea182_09864283')) {function content_526583c82ea182_09864283($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("carousel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("jumbotron.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
