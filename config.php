<?php

// 开发 Or 部署
define('DEBUG', TRUE);

define('APP_PATH',    dirname(__FILE__));	// 程序入口路径
define('LIB_PATH',    dirname(__FILE__).'/lib');	// 定义框架库路径


define('SP_PATH',     LIB_PATH.'/SpeedPHP');	// 引入 SpeedPHP 框架
define('TPL_PATH',    APP_PATH.'/template');	// 定义模板路径

// 网站路径
$current_url = substr($_SERVER["REQUEST_URI"], 0, strpos($_SERVER["REQUEST_URI"], '/', 1));
define('SITE_PATH',    $current_url);
unset($current_url);

define('PUB_PATH',    SITE_PATH.'/public');


// 设定要用的默认时区。自 PHP 5.1 可用
date_default_timezone_set('PRC');

// 程序配置
return array(
	'mode' => 'debug', // 应用程序模式，1默认为调试模式
	'launch' => array( // 加入挂靠点，以便开始使用Url_ReWrite的功能
		'router_prefilter' => array( 
			array('spUrlRewrite', 'setReWrite'),  // 对路由进行挂靠，处理转向地址
			// array('spAclExtend','maxcheck'), // 开启有限的权限控制
		),
	 	/*'function_url' => array(
			array("spUrlRewrite", "getReWrite"),  // 对spUrl进行挂靠，让spUrl可以进行Url_ReWrite地址的生成
	    	),
		*/
	),

	'default_controller' => 'main', // 默认的控制器名称
	'default_action' => 'index',  // 默认的动作名称
	'url_controller' => 'c',  // 请求时使用的控制器变量标识
	'url_action' => 'a',  // 请求时使用的动作变量标识

	'view' => array( // 视图配置
		'enabled' => TRUE, // 开启视图
		'config' =>array(
			'template_dir' => APP_PATH.'/template', // 模板目录
			'compile_dir' => APP_PATH.'/tmp', // 编译目录
			'cache_dir' => APP_PATH.'/tmp', // 缓存目录
			'left_delimiter' => '{{',  // smarty左限定符
			'right_delimiter' => '}}', // smarty右限定符
			'auto_literal' => TRUE, // Smarty3新特性
		),
		'debugging' => FALSE, // 是否开启视图调试功能，在部署模式下无法开启视图调试功能
		'engine_name' => 'Smarty', // 模板引擎的类名称，默认为Smarty
		'engine_path' => SP_PATH.'/Drivers/Smarty/Smarty.class.php', // 模板引擎主类路径
		'auto_ob_start' => TRUE, // 是否自动开启缓存输出控制
		'auto_display' => FALSE, // 是否使用自动输出模板功能
		'auto_display_sep' => '/', // 自动输出模板的拼装模式，/为按目录方式拼装，_为按下划线方式，以此类推
		'auto_display_suffix' => '.html', // 自动输出模板的后缀名
	),

	'db' => array(  // 数据库连接配置
		'driver' => 'mysql',   // 驱动类型
		'host' => 'localhost', // 数据库地址
		'port' => 3306,        // 端口
		'login' => 'root',     // 用户名
		'password' => '123456',      // 密码
		'database' => 'mark_system',      // 库名称
		'prefix' => 'sp_',           // 表前缀
		'persistent' => FALSE,    // 是否使用长链接
	),
	'db_driver_path' => '', // 自定义数据库驱动文件地址
	'db_spdb_full_tblname' => TRUE, // spDB是否使用表全名

	'ext' => array(
	 	// 以下是Url_ReWrite的设置
		/*
		'spUrlRewrite' => array(
			'hide_default' => false, // 隐藏默认的main/index名称，但这前提是需要隐藏的默认动作是无GET参数的
				'args_path_info' => false, // 地址参数是否使用path_info的方式，默认否
			'suffix' => '.html', // 生成地址的结尾符
		),
		*/
		'spAclExtend' => array( // acl扩展设置
	 		'prompt' => array("AppModel", "acl_error"),
	 	), 
	),

);




?>
