<?php
require_once ('m_general.php');

/**
 * 企业附件数据模型
 * @author Zhining
 * @version 1.0
 * @created 16-四月-2013 10:12:10
 */
class m_company_attachment extends m_general
{

	/**
	 * 表主键
	 */
	var $pk = 'attachment_id';
    
	/**
	 * 表名，默认前缀 sp_
	 */
	var $table = 'company_attachment';


}
?>