<?php /* Smarty version Smarty-3.0.8, created on 2013-04-10 19:53:37
         compiled from "/var/www/monitoring/template/monitor/index.html" */ ?>
<?php /*%%SmartyHeaderCode:2098667531516551dea1f196-59756156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ad185d96cb1955a79132a567b70cbd4a276b6b1' => 
    array (
      0 => '/var/www/monitoring/template/monitor/index.html',
      1 => 1365594816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2098667531516551dea1f196-59756156',
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
      var channelId = $('body').attr('data-channel-id');
      var $currentChannnel = $(".nav li a[data-channel-id=" + channelId + "]");
      if ($currentChannnel.length > 0) {
        $currentChannnel.parent('li').addClass('active');
      };


      // Update shidu, wendu, hongwai
      var $update_info = $('.update_info');
      var humidity_timerid = setInterval(function () {
          
          $update_info.each(function () {
              $(this).find('.update_area').each(function (e) {
                  var $this = $(this);
                  var url = $this.attr('data-url');
                  $.get(url, {}, function (data) {
                      if (data.status == 1) {
                          $this.text(data.data.data);
                      };
                  });
              });
          });
          
      }, 1000);

    });
  </script>
</head>
<body data-page-class=".page_index" data-channel-id="<?php echo $_smarty_tpl->getVariable('channelId')->value;?>
">
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
          <div class="span6 mediaplayer-container">
            <object id="mediaplayer" 
              codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#version=5,1,52,701" 
              standby=
              classid="clsid:22d6f312-b0f6-11d0-94ab-0080c74c7e95" 
              viewastext width="500" height="400">
              <embed autostart="true" src="Real://192.168.0.111/<?php echo $_smarty_tpl->getVariable('channelId')->value;?>
/5050" hidden="no" type="application/x-mplayer2" width="500" height="400" showcontrols="false">
              </embed>
            </object>
          </div><!--/span-->
          <div class="span6">
            <h3>监控表</h3>
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>区域</th>
                  <th>温度(℃)</th>
                  <th>湿度(RH)</th>
                  <th>红外感应</th>
                  <th>YanWu</th>
                </tr>
              </thead>
              <tbody>
                <tr class="update_info">  
                  <td>A区</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_humidity','area'=>'a'),$_smarty_tpl);?>
">33</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_temperature','area'=>'a'),$_smarty_tpl);?>
">44</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_infrared','area'=>'a'),$_smarty_tpl);?>
">2131</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_fog','area'=>'a'),$_smarty_tpl);?>
">2131</td>
                </tr>
                <tr class="update_info">
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_humidity','area'=>'b'),$_smarty_tpl);?>
">B区</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_humidity','area'=>'a'),$_smarty_tpl);?>
">33</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_temperature','area'=>'a'),$_smarty_tpl);?>
">44</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_infrared','area'=>'a'),$_smarty_tpl);?>
">2131</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_fog','area'=>'a'),$_smarty_tpl);?>
">2131</td>
                </tr>
                <tr class="update_info">
                  <td>C区</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_humidity','area'=>'a'),$_smarty_tpl);?>
">33</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_temperature','area'=>'a'),$_smarty_tpl);?>
">44</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_infrared','area'=>'a'),$_smarty_tpl);?>
">2131</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_fog','area'=>'a'),$_smarty_tpl);?>
">2131</td>
                </tr>
              </tbody>
            </table>
          </div><!--/span-->
        </div><!--/row-->
      </div><!--/span-->
    </div><!--/row-->

    <?php $_template = new Smarty_Internal_Template('monitor/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
  </div>
</body>
</html>
