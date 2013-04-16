<?php /* Smarty version Smarty-3.0.8, created on 2013-03-31 10:12:42
         compiled from "D:\PHP_ROOT/template\main/signin.html" */ ?>
<?php /*%%SmartyHeaderCode:211535157effaec37c6-92459240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa705caf349f42b48ddb5e610518a6f4469bd284' => 
    array (
      0 => 'D:\\PHP_ROOT/template\\main/signin.html',
      1 => 1364716540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211535157effaec37c6-92459240',
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
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('Url')->value;?>
/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('Url')->value;?>
/css/bootstrap-responsive.min.css">
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('Url')->value;?>
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
  	<script type="text/javascript" src="js/ie8.js"></script>
 	<![endif]-->
</head>
<body>
	<div class="wrapper container">
		<form class="form-horizontal form-signin" action="__URL__/checkSignin">
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
		      <label class="checkbox">
		        <input type="checkbox" checked> 自动登陆
		      </label>
		      <button type="submit" class="btn">登陆</button>
		  </div>
		</form>
	</div>
</body>
</html>