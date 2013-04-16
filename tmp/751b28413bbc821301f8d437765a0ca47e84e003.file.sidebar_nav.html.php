<?php /* Smarty version Smarty-3.0.8, created on 2013-04-10 18:46:19
         compiled from "/var/www/monitoring/template/monitor/sidebar_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:1994780332516542fb4abdc3-23651396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '751b28413bbc821301f8d437765a0ca47e84e003' => 
    array (
      0 => '/var/www/monitoring/template/monitor/sidebar_nav.html',
      1 => 1365590777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1994780332516542fb4abdc3-23651396',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div class="well sidebar-nav">
  <ul class="nav nav-list">

    <li class="nav-header tab2">浏览照片/录像 <span class="button_tab"><a href="javascript:void(0);">HIDE</a></span></li>
    <li class="tabObject2 view_pictures"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'view_pictures'),$_smarty_tpl);?>
">浏览照片</a></li>
    <li class="tabObject2 view_videos"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'view_videos'),$_smarty_tpl);?>
">浏览录像</a></li>


    <li class="nav-header tab3">选择通道 <span class="button_tab"><a href="javascript:void(0);">HIDE</a></span></li>
    <li class="tabObject3 channel"><a data-channel-id="0" class="channel_link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'index','channelId'=>0),$_smarty_tpl);?>
">通道0</a></li>
    <li class="tabObject3 channel"><a data-channel-id="1" class="channel_link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'index','channelId'=>1),$_smarty_tpl);?>
">通道1</a></li>
    <li class="tabObject3 channel"><a data-channel-id="2" class="channel_link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'index','channelId'=>2),$_smarty_tpl);?>
">通道2</a></li>
    <li class="tabObject3 channel"><a data-channel-id="3" class="channel_link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'index','channelId'=>3),$_smarty_tpl);?>
">通道3</a></li>
    <li class="tabObject3 channel"><a data-channel-id="4" class="channel_link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'index','channelId'=>4),$_smarty_tpl);?>
">通道4</a></li>
    <li class="tabObject3 channel"><a data-channel-id="5" class="channel_link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'index','channelId'=>5),$_smarty_tpl);?>
">通道5</a></li>
    <li class="tabObject3 channel"><a data-channel-id="6" class="channel_link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'index','channelId'=>6),$_smarty_tpl);?>
">通道6</a></li>
    <li class="tabObject3 channel"><a data-channel-id="7" class="channel_link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'index','channelId'=>7),$_smarty_tpl);?>
">通道7</a></li>


    <li class="nav-header tab1 carema_controll">拍照/录像 <span class="button_tab"><a href="javascript:void(0);">HIDE</a></span> </li>
    <li class="tabObject1 carema_controll"><a data-ctrl-num="1" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
">拍照</a></li>
    <li class="tabObject1 carema_controll"><a data-ctrl-num="2" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
">开始录像</a></li>
    <li class="tabObject1 carema_controll"><a data-ctrl-num="3" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
">停止录像</a></li>
    <li class="tabObject1 carema_controll"><a data-ctrl-num="4" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
" class="isMove"><input type="checkbox" value="<?php echo $_smarty_tpl->getVariable('isMove')->value;?>
" id="isMoveCheckbox" />移动录像</a></li>

    <li class="nav-header tab4 jidianqi_controll">Jian Dian Qi <span class="button_tab"><a href="javascript:void(0);">HIDE</a></span> </li>
    <li class="tabObject4 jidianqi_controll"><a data-ctrl-num="5" data-open="Open" data-close="Close" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
">A1 <span class="status">Close</span></a></li>
    <li class="tabObject4 jidianqi_controll"><a data-ctrl-num="6" data-open="Open" data-close="Close" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
">A1 <span class="status">Close</span></a></li>
    <li class="tabObject4 jidianqi_controll"><a data-ctrl-num="7" data-open="Open" data-close="Close" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
">A1 <span class="status">Close</span></a></li>
    <li class="tabObject4 jidianqi_controll"><a data-ctrl-num="8" data-open="Open" data-close="Close" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
">A1 <span class="status">Close</span></a></li>
    <li class="tabObject4 jidianqi_controll"><a data-ctrl-num="9" data-open="Open" data-close="Close" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
">A1 <span class="status">Close</span></a></li>
    <li class="tabObject4 jidianqi_controll"><a data-ctrl-num="10" data-open="Open" data-close="Close" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
">A1 <span class="status">Close</span></a></li>
    <li class="tabObject4 jidianqi_controll"><a data-ctrl-num="11" data-open="Open" data-close="Close" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
">A1 <span class="status">Close</span></a></li>
    <li class="tabObject4 jidianqi_controll"><a data-ctrl-num="12" data-open="Open" data-close="Close" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
">A1 <span class="status">Close</span></a></li>
    <li class="tabObject4 jidianqi_controll"><a data-ctrl-num="13" data-open="Open" data-close="Close" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
">A1 <span class="status">Close</span></a></li>
    <li class="tabObject4 jidianqi_controll"><a data-ctrl-num="14" data-open="Open" data-close="Close" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
">A1 <span class="status">Close</span></a></li>
    <li class="tabObject4 jidianqi_controll"><a data-ctrl-num="15" data-open="Open" data-close="Close" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
">A1 <span class="status">Close</span></a></li>
    <li class="tabObject4 jidianqi_controll"><a data-ctrl-num="16" data-open="Open" data-close="Close" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'tap_picture'),$_smarty_tpl);?>
">A1 <span class="status">Close</span></a></li>

  </ul>



  <script type="text/javascript">
        var checkbox = document.getElementById('isMoveCheckbox');
        if (checkbox.value == 'yes') {
            checkbox.checked = true;
        } else if (checkbox.value == 'no') {
            checkbox.checked = false;
        }
    </script>
</div><!--/.well .sidebar .navbar -->
