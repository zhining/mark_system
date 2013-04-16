<?php
require_once ('m_general.php');

/**
 * 公司数据模型
 * @author Zhining
 * @version 1.0
 * @created 16-四月-2013 10:12:09
 */
class m_company extends m_general
{

	/**
	 * 表主键
	 */
	var $pk = 'company_id';
    
	/**
	 * 表名（默认 sp_ 前缀）
	 */
	var $table = 'scompany';



}
?>