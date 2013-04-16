<?php

/**
 * 全部数据模型页面的父类，实现一些全局设置
 * @author Administrator
 * @version 1.0
 * @created 16-四月-2013 10:12:06
 */
class m_general extends spModel
{

	/**
	 * 构造函数
	 */
	function __construct()
	{
        parent::__construct();
	}

	/**
	 * 加密信息，返回密文
	 * 
	 * @param str
	 * @param type
	 */
	function crypt($str, $type = 'md5')
	{
        if (is_string($str)) {
			return $type($str);
		}
	}

	/**
	 * 权限不足的处理
	 */
	function acl_error()
	{
        $this->jump('权限不足', spUrl('main', 'index'), 1);
        exit;
	}

	/**
	 * 跳转处理
	 * @param msg
	 * @param url
	 * @param delay
	 */
	function jump($msg, $url, $delay = 0)
	{
        echo "<html><head><meta http-equiv='refresh' content='{$delay};url={$url}'><meta charset='utf-8'></head><body></body><h2>{$msg}</h2></html>";
		exit;
	}

}
?>