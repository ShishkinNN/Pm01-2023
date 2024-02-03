<?php
/**
 * Установка модуля
 *
 * @package    Diafan.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2015 OOO «Диафан» (http://www.diafan.ru/)
 */
if (!defined("DIAFAN"))
{
	include dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/includes/404.php";
}

class Search_install_demo extends Install
{
	/**
	 * @var array демо-данные
	 */
	public $demo = array(
		"site" => array(
			array(
				"id" => 25,
				"name" => array("Поиск"),
				"rewrite" => "search",
				"sort" => 28,
				"module_name" => "search",
			),
		),
		"config" => array(
			array(
				"name" => "all_current_index_module_element",
				"value" => "",
			),
			array(
				"name" => "all_current_index_site",
				"value" => "",
			),
			array(
				"name" => "full_index",
				"value" => "1",
			),
			array(
				"name" => "all_current_index_module_table",
				"value" => "",
			),
		),
	);
}