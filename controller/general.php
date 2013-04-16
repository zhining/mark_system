<?php


/**
 * 全部控制器页面的父类  实现一些全局的页面显示
 * @author Zhining
 * @version 1.0
 * @updated 16-四月-2013 10:58:35
 */
class general extends spController
{

	/**
	 * 程序传入来的参数（不包含文件参数、控制器controller、动作action）
	 */
	var $args = null;
    
	/**
	 * 模板常量，将注册至所有模板中，即模板通用变量
	 */
	var $tpl_consts = null;


	/**
	 * 构造函数
	 */
	public function __construct()
	{
		parent::__construct();  //调用父类构造函数
        
		$this->tpl_consts = require('tpl_consts.php');  // 引入模板常量
		$this->assign($this->tpl_consts);   // 将模板常量注册至模板中
        
		$args = $this->spArgs();    // 获取传入参数
		$this->controller = $args['c'];   // 保存控制器
		$this->action = $args['a'];       // 保存动作
        
		unset($args['c']);  // 过滤传入数据中的控制器
		unset($args['a']);  // 过滤传入数据中的动作
        
		$this->args = $args;    // 保存参数
	}

	/**
	 * 错误提示程序，如果是ajax请求，会以JSON数据包返回
	 * 
	 * @param msg    错误提示
	 * @param url    跳转地址
	 */
	public function error($msg, $url = '')
	{
        if (isAjax()) { 
            // ajax 请求，返回 json 数据包
            $this->ajaxReturn(null, $msg, 1);  
        } else {
            $this->redirect($msg, $url, 1);
        }
	}

	/**
	 * 成功提示程序  如果是ajax请求，会以JSON数据包返回
	 * 
	 * @param msg    成功提示需要的相关信息
	 * @param url    跳转地址
	 */
	public function success($msg, $url = '')
	{
        if (isAjax()) { 
            // ajax 请求，返回 json 数据包
            $this->ajaxReturn(null, $msg, 1);  
        } else {
            $this->redirect($msg, $url, 1);
        }
	}

	/**
	 * 输出模板
	 * 
	 * @param filename    文件路径
	 * @param filetype    文件类型
	 */
	function display($filename, $output = true)
	{
        parent::display($filename, $output);
	}

	/**
	 * Ajax 返回 JSON数据
	 * 
	 * @param data    数据
	 * @param info    提示信息
	 * @param status    状态（0或1）
	 */
	public function ajaxReturn($data, $info, $status)
	{
        header('Content-type: text/json');
		$json = array( 'data' => $data, 'info' => $info, 'status' => $status );
		echo json_encode($json);
		exit();
	}

	/**
	 * 判断请求方法
	 * 
	 * @param method    'get', 'post', 'put', 'delete'
	 */
	public function is($method)
	{           
        $request_method = strtolower($_SERVER['REQUEST_METHOD']);
        if ($method == $request_method) {
            return true;
        } else {
            return false;
        }
	}

	/**
	 * 判断请求是否为 Ajax 请求
	 */
	public function isAjax()
	{
        return ($this->getHttpHeader ('X_REQUESTED_WITH')== 'XMLHttpRequest');
	} 
  
    /**
	 * 成功或错误跳转
	 * 
	 * @param msg    跳转信息
	 * @param url    跳转地址
	 * @param delay    延迟跳转时间
	 */
	public function redirect($msg, $url, $delay = 0)
	{
        echo "<html><head><meta http-equiv='refresh' content='{$delay};url={$url}'><meta charset='utf-8'></head><body></body><h2>{$msg}</h2></html>";
		exit;
	}
    
    /**
	 * 将数组变量注册至模板
	 * 
	 * @param arr    要注册的数组变量
	 */
	private function assign($arr)
	{
        if (is_array($arr)) {
			foreach ($arr as $key => $value) {
				$this->{$key} = $value;
			};
		}
	}
    
}
?>