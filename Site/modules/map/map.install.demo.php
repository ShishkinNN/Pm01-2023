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

class Map_install_demo extends Install
{
	/**
	 * @var array демо-данные
	 */
	public $demo = array(
		"site" => array(
			array(
				"id" => 17,
				"name" => array("Карта сайта"),
				"rewrite" => "map",
				"sort" => 26,
				"module_name" => "map",
			),
		),
		"config" => array(
			array(
				"name" => "module_news_index",
				"value" => "",
			),
			array(
				"name" => "module_news_current_index_module_type",
				"value" => "",
			),
			array(
				"name" => "module_news_current_index_module_element",
				"value" => "",
			),
			array(
				"name" => "module_news_current_index_site",
				"value" => "",
			),
			array(
				"name" => "module_photo_index",
				"value" => "",
			),
			array(
				"name" => "all_current_index_module_type",
				"value" => "",
			),
			array(
				"name" => "module_photo_current_index_module_type",
				"value" => "",
			),
			array(
				"name" => "all_current_index_module_element",
				"value" => "",
			),
			array(
				"name" => "module_photo_current_index_module_element",
				"value" => "",
			),
			array(
				"name" => "all_current_index_site",
				"value" => "",
			),
			array(
				"name" => "module_photo_current_index_site",
				"value" => "",
			),
			array(
				"name" => "full_index",
				"value" => "1",
			),
		),
	);
}