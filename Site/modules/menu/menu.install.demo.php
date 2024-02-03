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

class Menu_install_demo extends Install
{
	/**
	 * @var array демо-данные
	 */
	public $demo = array(
		"menu_category" => array(
			array(
				"id" => 1,
				"name" => array("Меню верхнее"),
				"current_link" => "1",
				"show_all_level" => "1",
			),
			array(
				"id" => 2,
				"name" => array("Меню интернет-магазин"),
			),
		),
	);
}