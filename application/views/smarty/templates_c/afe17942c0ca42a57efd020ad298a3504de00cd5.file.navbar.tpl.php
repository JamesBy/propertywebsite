<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 19:34:07
         compiled from "application\views\smarty\templates\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14122526583c848ff82-26948126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afe17942c0ca42a57efd020ad298a3504de00cd5' => 
    array (
      0 => 'application\\views\\smarty\\templates\\navbar.tpl',
      1 => 1387650778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14122526583c848ff82-26948126',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_526583c849bb05_83484747',
  'variables' => 
  array (
    'loggedIn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526583c849bb05_83484747')) {function content_526583c849bb05_83484747($_smarty_tpl) {?>
<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top" style="max-height: 20px;" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <!--span class="sr-only">Toggle navigation</span-->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Daft Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php?action=buy">Search</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">

            </form>
            <?php if ($_smarty_tpl->tpl_vars['loggedIn']->value==false) {?>
            <ul class="nav navbar-nav navbar-right">
                
                <!--li><a href="/users/sign_up">Sign Up</a></li-->
                <li class="divider-vertical"></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
                    <div class="dropdown-menu" id="ddMenu" style="padding: 15px; padding-bottom: 0px;">
                        <form action="login.php" method="post" accept-charset="UTF-8">
                            <label for="username">User Name</label>
                            <input id="username" style="margin-bottom: 15px;" type="text" name="username" size="30" placeholder="admin"/>
                            <label for="password">Password</label>
                            <input id="password" style="margin-bottom: 15px;" type="password" name="password" size="30" placeholder="letmein" />


                            <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px; margin-bottom: 10px" type="submit" name="commit" value="Sign In" />
                        </form>
                    </div>
                </li>

            </ul>
            <?php } elseif ($_smarty_tpl->tpl_vars['loggedIn']->value==true) {?>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="addHouse.php">Add New</a></li>
                <li><a href="logout.php">Logout</a></li>
               
                </ul>
            
            <?php }?>
        </div><!-- /.navbar-collapse -->
    </nav>
</div>    <?php }} ?>
