<?php /* Smarty version Smarty-3.0.8, created on 2013-04-09 18:40:07
         compiled from "/var/www/monitoring/template/monitor/view_images.html" */ ?>
<?php /*%%SmartyHeaderCode:11304380515163f00738ba93-77418038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b84dc4f9bdb752c8e5fe568e2659aa613d80232' => 
    array (
      0 => '/var/www/monitoring/template/monitor/view_images.html',
      1 => 1365503962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11304380515163f00738ba93-77418038',
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

  <script type="text/javascript">
  $(function () {
      $('.media-delete').click(function (e) {
          e.preventDefault();
          if (window.confirm('确定删除图片？')) {
              var $this = $(this),
                  url   = $this.attr('data-url'),
                  id    = $this.attr('data-id');
              $.post(url, {
                  'id' :  id,
              }, function (data) {
                  if (data.status == 1) {
                      $this.parent('li').fadeOut('normal');  
                  } else {
                      alert(data.info);
                  }
              }, 'json');
          };
      });
  });
  </script>
</head>
<body data-page-class=".view_images">
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
          <div class="media-container">
            <h3>图片浏览</h3>
            <ul class="unstyled">
              <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('media_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
              <li>
                  <a href="javscript:void(0);" class="thumbnail"><img src="<?php echo $_smarty_tpl->getVariable('Url')->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
" alt="" /></a>
                  <a href="<?php echo $_smarty_tpl->getVariable('Url')->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" target="_blank" class="btn btn-inverse btn-mini media-download"><i class="icon-white icon-remove"></i> 下载</a>
                  <a href="#" class="btn btn-inverse btn-mini media-delete" data-url=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'delete_media'),$_smarty_tpl);?>
 data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['media_id'];?>
"><i class="icon-white icon-remove"></i> 删除</a>
              </li>
              <?php }} ?>
            </ul>
          </div>
        </div><!--/row-->
      </div><!--/span-->
    </div><!--/row-->

    <?php $_template = new Smarty_Internal_Template('monitor/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

  </div>
</div>
</body>
</html>
