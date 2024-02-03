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

class Bs_install_demo extends Install
{
	/**
	 * @var array демо-данные
	 */
	public $demo = array(
		"bs_category" => array(
			array(
				"id" => 1,
				"name" => "Слайдер на главной",
			),
		),
		"bs" => array(
			array(
				"type" => 1,
				"file" => "air_1.jpg",
				"cat_id" => 1,
				"copy" => array("bs/air_1.jpg"),
			),
			array(
				"type" => 1,
				"file" => "air_1_6.jpg",
				"cat_id" => 1,
				"copy" => array("bs/air_1_6.jpg"),
			),
		),
	);
}