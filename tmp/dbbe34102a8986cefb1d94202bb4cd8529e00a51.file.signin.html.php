<?php /* Smarty version Smarty-3.0.8, created on 2013-04-16 14:51:53
         compiled from "D:\PHP_ROOT\mark_system/template\main/signin.html" */ ?>
<?php /*%%SmartyHeaderCode:3839516cf509e1fd67-87576560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbbe34102a8986cefb1d94202bb4cd8529e00a51' => 
    array (
      0 => 'D:\\PHP_ROOT\\mark_system/template\\main/signin.html',
      1 => 1365494488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3839516cf509e1fd67-87576560',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
<head>
    <meta charset="utf-8" />
    <title>监控登录界面</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('Public')->value;?>
/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('Public')->value;?>
/css/bootstrap-responsive.min.css">
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('Public')->value;?>
/js/modernizr-2.6.2.min.js"></script>
	<style type="text/css">
	body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }
     .form-signin {
     	max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
    }
	</style>
	<!--[if lt IE 7]>
  	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('Public')->value;?>
/js/ie8.js"></script>
 	<![endif]-->
</head>
<body>
	<div class="wrapper container">
		<form class="form-horizontal form-signin" method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'checkSignin'),$_smarty_tpl);?>
">
		  <h3 class="text-center">监控登录界面</h3>
		  <div class="control-group">
		    <label for="username">账号</label>
		    	<div class="input-prepend">
					<span class="add-on"><i class="icon-user"></i></span>
					<input type="text" class="input-xlarge" id="username" name="username" placeholder="账号">
				</div>
		  </div>
		  <div class="control-group">
		    <label for="password">密码</label>
		      <div class="input-prepend">
					<span class="add-on"><i class="icon-lock"></i></span>
					<input type="password" class="input-xlarge" id="password" name="password" placeholder="密码">
				</div>
		  </div>
		  <div class="control-group">
		      <button type="submit" class="btn">登陆</button>
		  </div>
		</form>
	</div>
</body>
</html>