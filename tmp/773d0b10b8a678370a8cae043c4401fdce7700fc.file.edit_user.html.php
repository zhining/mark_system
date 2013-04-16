<?php /* Smarty version Smarty-3.0.8, created on 2013-04-10 14:22:29
         compiled from "D:\PHP_ROOT\monitoring/template\monitor/edit_user.html" */ ?>
<?php /*%%SmartyHeaderCode:24551650525cbfc39-82776689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '773d0b10b8a678370a8cae043c4401fdce7700fc' => 
    array (
      0 => 'D:\\PHP_ROOT\\monitoring/template\\monitor/edit_user.html',
      1 => 1365574948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24551650525cbfc39-82776689',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="zh-CN"> <!--<![endif]-->
<head>
  <?php $_template = new Smarty_Internal_Template('monitor/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</head>
<body data-page-class=".edit_user">
	<?php $_template = new Smarty_Internal_Template('monitor/head_nav.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

  <div class="container-fluid content">
    <div class="row-fluid">
      <div class="span2">
        <?php $_template = new Smarty_Internal_Template('monitor/sidebar_nav.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
      </div><!--/span-->
      <div class="span10 well main-content">
        <div class="row-fluid">         
          <div class="span12">
            <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'save_user'),$_smarty_tpl);?>
" class="form-horizontal form-signin" method="post" >
              <h3 class="text-center">更改密码</h3>
              <div class="control-group">
                <label for="username">账号</label>
                <span>admin</span>
              </div>
              <div class="control-group">
                <label for="password">新密码</label>
                  <div class="input-prepend">
                  <span class="add-on"><i class="icon-lock"></i></span>
                  <input type="password" class="input-xlarge" id="password" name="password" placeholder="密码">
                </div>
              </div>
              <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->getVariable('user')->value['id'];?>
">
              <div class="control-group">
                  <button type="submit" class="btn">保存</button>
              </div>
            </form>
          </div><!--/span-->
        </div><!--/row-->
      </div><!--/span-->
    </div><!--/row-->

    <?php $_template = new Smarty_Internal_Template('monitor/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    
  </div>
</body>
</html>
