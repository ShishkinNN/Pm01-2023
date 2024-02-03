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

class Rating_install_demo extends Install
{
	/**
	 * @var array демо-данные
	 */
	public $demo = array(
		"rating" => array(
			array(
				"rating" => "4",
				"module_name" => "shop",
				"element_type" => "element",
				"element_id" => 15,
				"count_votes" => 1,
			),
			array(
				"rating" => "3",
				"module_name" => "shop",
				"element_type" => "element",
				"element_id" => 18,
				"count_votes" => 1,
			),
		),
	);
}