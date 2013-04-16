<?php /* Smarty version Smarty-3.0.8, created on 2013-04-10 17:18:42
         compiled from "/var/www/monitoring/template/monitor/head_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:124272898151652e72d0a5d5-52321014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '706c3bddcb814acf317acad908863bce74006639' => 
    array (
      0 => '/var/www/monitoring/template/monitor/head_nav.html',
      1 => 1365585520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124272898151652e72d0a5d5-52321014',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="brand" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'index'),$_smarty_tpl);?>
">网络监控</a>
        <div class="nav-collapse collapse">
          <p class="navbar-text pull-right">
            管理员：<a href="#" class="navbar-link">植宁</a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="navbar-link">注销</a>
          </p>
          <ul class="nav">
            <li class="page_index"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'index'),$_smarty_tpl);?>
">首页</a></li>
<!--             <li><a href="#contact">联系</a></li> -->
	          <!-- <li class="edit_user"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'edit_user'),$_smarty_tpl);?>
">更改密码</a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div><!-- /.navbar -->