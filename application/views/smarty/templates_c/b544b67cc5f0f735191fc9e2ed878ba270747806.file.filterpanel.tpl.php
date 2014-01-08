<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 19:34:08
         compiled from "application\views\smarty\templates\filterpanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2176352aefa6be6dc00-03232998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b544b67cc5f0f735191fc9e2ed878ba270747806' => 
    array (
      0 => 'application\\views\\smarty\\templates\\filterpanel.tpl',
      1 => 1387650316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2176352aefa6be6dc00-03232998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52aefa6c067e80_96650894',
  'variables' => 
  array (
    'var' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52aefa6c067e80_96650894')) {function content_52aefa6c067e80_96650894($_smarty_tpl) {?><!--Featuring smarty loops to fill selectboxes-->

<div class="row well">Refine Search</div>
<div class="row">

    <div class="form-group col-md-3" id="divcounty" name="divcounty">
        <label class="control-label" for="sbLocArea">County</label>
        <select class="form-control" id="sbLocArea" name="sbLocArea" onchange="filterListing()">
            <option value = "">All</option>
            

        </select>
    </div>
    <div class="form-group col-md-3" id="divpricemin" name="divpricemin">
        <label class="control-label" for="sbPriceMin">Price-min</label>
        <select class="form-control" id="sbPriceMin" name="sbPriceMin" onchange="filterListing()">
            <option value = "">No Min</option>
            <?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 25000;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 5000000+1 - (25000) : 25000-(5000000)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 25000, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
">€<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</option>
            <?php }} ?>
            

        </select>
            
    </div>
    <div class="form-group col-md-3" id="divpricemax" name="price">
        <label class="control-label" for="sbpricemax">Price-max</label>
        <select class="form-control" id="sbpricemax" name="sbpricemax" onchange="filterListing()">
        <option value = "">No Max</option>
            <?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 25000;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 5000000+1 - (25000) : 25000-(5000000)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 25000, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
">€<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</option>
            <?php }} ?>
           

        </select>
            
    </div>        
    <div class="form-group col-md-3" id="divtype" name="refinediv">
        <label class="control-label" for="sbtype">House Type</label>
        <select class="form-control" id="sbtype" name="sbtype" onchange="filterListing()">
                    <option value = "">Any</option>
                    <option value="Apartment">Apartement</option>
                    <option value="Terraced House">Terraced House</option>
                    <option value="Semi Detached">Semi Detached</option>
                    <option value="Detached">Detached</option>
                    <option value="Bungalow">Bungalow</option>
                    <option value="Country">Country House</option>
                    <option value="Studio">Studio</option>
                    <option value="House">House</option>
            

        </select>
    </div>
</div>
<?php }} ?>
