<?php
require_once ('m_general.php');

/**
 * 用户数据模型
 * @author Zhining
 * @version 1.0
 * @created 16-四月-2013 10:12:08
 */
class m_user extends m_general
{

	/**
	 * 表主键
	 */
	var $pk = 'user_id';
    
	/**
	 * 表名（若没有设置前缀，则写表全名）默认表前缀 sp_
	 */
	var $table = 'user';

}
?>