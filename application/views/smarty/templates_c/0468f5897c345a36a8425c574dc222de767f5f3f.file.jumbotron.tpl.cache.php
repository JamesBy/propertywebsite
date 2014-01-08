<?php /* Smarty version Smarty-3.1.15, created on 2013-10-21 19:13:55
         compiled from "application\views\smarty\templates\jumbotron.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300775255b3f4e4fd25-11772246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0468f5897c345a36a8425c574dc222de767f5f3f' => 
    array (
      0 => 'application\\views\\smarty\\templates\\jumbotron.tpl',
      1 => 1382373600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300775255b3f4e4fd25-11772246',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5255b3f4e53ba1_10664561',
  'variables' => 
  array (
    'fakeadvert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5255b3f4e53ba1_10664561')) {function content_5255b3f4e53ba1_10664561($_smarty_tpl) {?><div class="container">
     <div class="row">
        <div class="columnA pull-left col-md-8 col-sm-8">
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['daform']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
  
        </div>
        <div class="columnB pull-right col-md-4 col-sm-4">
            <img class="img-responsive" src='<?php echo $_smarty_tpl->tpl_vars['fakeadvert']->value;?>
'/>
        </div>
    </div>
</div>
<?php }} ?>
