<?php /* Smarty version Smarty-3.0.8, created on 2013-04-09 15:55:20
         compiled from "/var/www/monitoring/template/monitor/nav.html" */ ?>
<?php /*%%SmartyHeaderCode:12512408005163c96820c2b8-95871388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c818a9236725af03a6dc9b0692551426b12b69b' => 
    array (
      0 => '/var/www/monitoring/template/monitor/nav.html',
      1 => 1365494048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12512408005163c96820c2b8-95871388',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div class="well sidebar-nav">
  <ul class="nav nav-list">
    <li class="nav-header">拍照/录像</li>
    <li class="active"><a href="#">拍照</a></li>
    <li><a href="#">开始录像</a></li>
    <li><a href="#">停止录像</a></li>
    <li><a href="#">移动录像</a></li>
    <li class="nav-header">浏览照片/录像</li>
    <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'view_images'),$_smarty_tpl);?>
">浏览照片</a></li>
    <li><a href="#">浏览录像</a></li>
    <li class="nav-header">选择通道</li>通道0
    <li><a data-channel-id="0" class="channel_link" href="javascript:void(0);">通道0</a></li>
    <li><a data-channel-id="1" class="channel_link" href="javascript:void(0);">通道1</a></li>
    <li><a data-channel-id="2" class="channel_link" href="javascript:void(0);">通道2</a></li>
    <li><a data-channel-id="3" class="channel_link" href="javascript:void(0);">通道3</a></li>
    <li><a data-channel-id="4" class="channel_link" href="javascript:void(0);">通道4</a></li>
    <li><a data-channel-id="5" class="channel_link" href="javascript:void(0);">通道5</a></li>
    <li><a data-channel-id="6" class="channel_link" href="javascript:void(0);">通道6</a></li>
    <li><a data-channel-id="7" class="channel_link" href="javascript:void(0);">通道7</a></li>
  </ul>
</div><!--/.well .sidebar .navbar -->