<?php /* Smarty version Smarty-3.1.15, created on 2013-12-20 12:23:36
         compiled from "application\views\smarty\templates\adminControls.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2430552adec3e2765a4-55784326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dea991097a35c77a6904e04aac6922ed0f851f4' => 
    array (
      0 => 'application\\views\\smarty\\templates\\adminControls.tpl',
      1 => 1387538603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2430552adec3e2765a4-55784326',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52adec3e2c8624_02725607',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52adec3e2c8624_02725607')) {function content_52adec3e2c8624_02725607($_smarty_tpl) {?>

<button type="button" class="btn btn-danger btn-xs pull-right" onclick="deleteHouse(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
);">Delete</button>
<button type="submit" class="btn btn-primary btn-xs pull-right" style="margin-right: 4px;" onclick="location.href='addHouse.php?action=edit<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
';">Edit</button>
<?php if (($_smarty_tpl->tpl_vars['row']->value['sold'])) {?> 
<input type="checkbox" id="soldyn<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" onclick="toggleSold(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)" checked><strong>Sold</strong>    
<?php } else { ?>
    <input type="checkbox" id="soldyn<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" onclick="toggleSold(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)"><strong>Sold</strong>    
<?php }?><?php }} ?>
