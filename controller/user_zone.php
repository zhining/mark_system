<?php
require_once ('general.php');

/**
 * 用户空间
 * 
 * 企业用户
 * 1. 查看、更改个人信息
 * 2. 查看、更改企业提交信息
 * 3. 查看企业信用评分信息
 * 
 * 专家用户
 * 1. 查看、更改个人信息
 * 2. 查看企业信息
 * 3. 更改企业信用评分信息
 * @author Zhining
 * @version 1.0
 * @created 16-四月-2013 10:07:17
 */
class user_zone extends general
{

	/**
	 * 个人空间首页
	 */
	function index()
	{
	}

	/**
	 * 读取个人信息（企业用户、专家用户）
	 */
	function readPerson()
	{
	}

	/**
	 * 读取公司信息（企业用户、专家用户）
	 */
	function readCompany()
	{
	}

	/**
	 * 更改个人信息（企业用户、专家用户）
	 */
	function updatePerson()
	{
	}

	/**
	 * 更改企业信息（企业用户）
	 */
	function updateCompany()
	{
	}

	/**
	 * 给公司评分（记录评分指标）（专家用户）
	 */
	function updateGrade()
	{
	}

}
?>