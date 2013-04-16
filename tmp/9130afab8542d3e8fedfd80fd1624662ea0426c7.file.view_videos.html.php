<?php /* Smarty version Smarty-3.0.8, created on 2013-04-10 14:12:41
         compiled from "D:\PHP_ROOT\monitoring/template\monitor/view_videos.html" */ ?>
<?php /*%%SmartyHeaderCode:14618516502d9e5a2d1-71508576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9130afab8542d3e8fedfd80fd1624662ea0426c7' => 
    array (
      0 => 'D:\\PHP_ROOT\\monitoring/template\\monitor/view_videos.html',
      1 => 1365574354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14618516502d9e5a2d1-71508576',
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
                  id    = $this.attr('data-id') >> 0,
                  path  = $this.attr('data-path');
              $.post(url, {
                  'id' :  id,
                  'path' : path
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
  <style type="text/css">
  .media-container li a.btn { position: static; margin: 5px 10px;  }
  .media-container li { height: auto; padding: 0; }
  </style>
</head>
<body data-page-class=".view_videos">
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
                  <a href="javscript:void(0);" class="thumbnail"><?php echo $_smarty_tpl->tpl_vars['item']->value['timestr'];?>
</a>
                  <a href="<?php echo $_smarty_tpl->getVariable('Url')->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" target="_blank" class="btn btn-inverse btn-mini media-download"><i class="icon-white icon-remove"></i> 下载</a>
                  <a href="#" class="btn btn-inverse btn-mini media-delete" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'delete_video'),$_smarty_tpl);?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" data-path="<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
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
