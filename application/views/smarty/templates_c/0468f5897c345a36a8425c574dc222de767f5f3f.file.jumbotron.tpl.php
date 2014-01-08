<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 19:34:08
         compiled from "application\views\smarty\templates\jumbotron.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31416526583c8510e07-60912838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0468f5897c345a36a8425c574dc222de767f5f3f' => 
    array (
      0 => 'application\\views\\smarty\\templates\\jumbotron.tpl',
      1 => 1387650721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31416526583c8510e07-60912838',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_526583c852c388_08046325',
  'variables' => 
  array (
    'fakeadvert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526583c852c388_08046325')) {function content_526583c852c388_08046325($_smarty_tpl) {?><br>
<div class="container nicebg" id="dCont">
    <br>
    <div class="row-fluid">
        <div class="pull-left col-md-8" id="theForm">
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['daform']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
        </div>
        <div class="pull-right col-md-4" id="adRight">
            <img class="img-responsive" src='<?php echo $_smarty_tpl->tpl_vars['fakeadvert']->value;?>
'  style='float:left; height:inherit; margin-left: 18px;'/>
        </div>
        
    </div>
</div>
<?php }} ?>
