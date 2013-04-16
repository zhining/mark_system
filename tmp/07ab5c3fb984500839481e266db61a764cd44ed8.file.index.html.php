<?php /* Smarty version Smarty-3.0.8, created on 2013-04-12 10:54:51
         compiled from "D:\PHP_ROOT\monitoring/template\monitor/index.html" */ ?>
<?php /*%%SmartyHeaderCode:156255167777b1c23f9-14768737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07ab5c3fb984500839481e266db61a764cd44ed8' => 
    array (
      0 => 'D:\\PHP_ROOT\\monitoring/template\\monitor/index.html',
      1 => 1365735112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156255167777b1c23f9-14768737',
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

      // init the object 
      var obj_arr = $('.update_area').toArray();
      var url_arr = [];

      for (var i = obj_arr.length - 1; i >= 0; i--) {
          url_arr.push(obj_arr[i].getAttribute('data-url'));
      };

      // 遍历更新信息
      var updateData = function () {
          for (var j = obj_arr.length - 1; j >= 0; j--) {
              (function (current_index) {
                $.get(url_arr[current_index], {}, function (data) {
                    if (data.status == 1) {
                        obj_arr[current_index].innerHTML = data.data.data;
                    };
                });
              })(j);
          };
      };

      var INTERVAL = 1000;
      setTimeout(function () {
          updateData();
          setTimeout(arguments.callee, INTERVAL);
      }, INTERVAL);


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
                  <td>B区</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_humidity','area'=>'b'),$_smarty_tpl);?>
">33</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_temperature','area'=>'b'),$_smarty_tpl);?>
">44</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_infrared','area'=>'b'),$_smarty_tpl);?>
">2131</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_fog','area'=>'b'),$_smarty_tpl);?>
">2131</td>
                </tr>
                <tr class="update_info">
                  <td>C区</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_humidity','area'=>'c'),$_smarty_tpl);?>
">33</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_temperature','area'=>'c'),$_smarty_tpl);?>
">44</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_infrared','area'=>'c'),$_smarty_tpl);?>
">2131</td>
                  <td class="update_area" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'monitor','a'=>'get_fog','area'=>'c'),$_smarty_tpl);?>
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
