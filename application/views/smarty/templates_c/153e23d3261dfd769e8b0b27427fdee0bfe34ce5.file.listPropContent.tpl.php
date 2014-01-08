<?php /* Smarty version Smarty-3.1.15, created on 2013-12-20 11:42:15
         compiled from "application\views\smarty\templates\listPropContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:368952b41b1833d823-64470367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '153e23d3261dfd769e8b0b27427fdee0bfe34ce5' => 
    array (
      0 => 'application\\views\\smarty\\templates\\listPropContent.tpl',
      1 => 1387535685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '368952b41b1833d823-64470367',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b41b183ba825_51910400',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b41b183ba825_51910400')) {function content_52b41b183ba825_51910400($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\Users\\Jamie\\Google Drive\\virtualhost\\dafthome\\application\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?>   
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <hr>
    <div class="row">
        <div class="col-md-3"> 
            <img class="img-responsive listImage" src="uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['image'];?>
" alt=""></img>
        </div>
        <div class="col-md-9">
            <div class="row dispAddress">
                <?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
, Co. <?php echo $_smarty_tpl->tpl_vars['row']->value['county'];?>

            </div>
            <div class="row"  id="descriptionDiv<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
">
                <?php if ($_smarty_tpl->tpl_vars['row']->value['sold']) {?>
                    <p style="color:red; word-wrap:break-word;"><strong>SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD SOLD</strong></p>   
                <?php } else { ?>
                    <strong><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</strong>
                <?php }?>
            </div><br>

            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <strong>Type: </strong><?php echo $_smarty_tpl->tpl_vars['row']->value['type'];?>
<br>
                    <strong>Asking Price: </strong><?php echo $_smarty_tpl->tpl_vars['row']->value['asking'];?>
<br>
                    <strong>Date: </strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['date']);?>
<br><br>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <strong>Seller Name: </strong><?php echo $_smarty_tpl->tpl_vars['row']->value['full_name'];?>
<br>
                    <strong>Email: </strong><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
<br>
                    <strong>Phone: </strong><?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
<br><br>
                </div>
            </div><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminControls']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </div>

<?php } ?><hr>


<?php }} ?>
