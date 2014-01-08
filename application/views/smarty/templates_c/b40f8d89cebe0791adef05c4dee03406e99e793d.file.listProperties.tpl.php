<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 19:34:08
         compiled from "application\views\smarty\templates\listProperties.tpl" */ ?>
<?php /*%%SmartyHeaderCode:806952a4b0c838d305-46431204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b40f8d89cebe0791adef05c4dee03406e99e793d' => 
    array (
      0 => 'application\\views\\smarty\\templates\\listProperties.tpl',
      1 => 1387650721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '806952a4b0c838d305-46431204',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a4b0c8431407_40445289',
  'variables' => 
  array (
    'badLoginAlert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a4b0c8431407_40445289')) {function content_52a4b0c8431407_40445289($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['filterPanel']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container" name="listPropRows" id="listPropRows">
    <?php echo $_smarty_tpl->getSubTemplate ("listPropContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
</div>
 <!--bad login is set in login.php's call to index.php if the user has entered 
 incorrect login details it is used to call an alert-->
<?php echo $_smarty_tpl->tpl_vars['badLoginAlert']->value;?>

<?php }} ?>
