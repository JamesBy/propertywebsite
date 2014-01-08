<?php /* Smarty version Smarty-3.1.15, created on 2013-10-21 19:21:41
         compiled from "application\views\smarty\templates\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30615255b11780a5a2-55716811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afe17942c0ca42a57efd020ad298a3504de00cd5' => 
    array (
      0 => 'application\\views\\smarty\\templates\\navbar.tpl',
      1 => 1382376095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30615255b11780a5a2-55716811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5255b1178122a7_11120568',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5255b1178122a7_11120568')) {function content_5255b1178122a7_11120568($_smarty_tpl) {?><nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Daft Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?action=buy">Buy</a></li>
            <li><a href="index.php?action=sell">Sell</a></li>

        </ul>
        <form class="navbar-form navbar-left" role="search">

        </form>
        <ul class="nav navbar-nav navbar-right">

            <li><a href="/users/sign_up">Sign Up</a></li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
                <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                    <form action="[YOUR ACTION]" method="post" accept-charset="UTF-8">
                        <label for="user_username">User Name</label>
                        <input id="user_username" style="margin-bottom: 15px;" type="text" name="user[username]" size="30" />
                        <label for="user_password">Password</label>
                        <input id="user_password" style="margin-bottom: 15px;" type="password" name="user[password]" size="30" />
                        

                        <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
                    </form>
                </div>
            </li>

        </ul>
    </div><!-- /.navbar-collapse -->
</nav><?php }} ?>
