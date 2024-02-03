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

class Images_install_demo extends Install
{
	/**
	 * @var array демо-данные
	 */
	public $demo = array(
		"images_variations" => array(
			array(
				"id" => 1,
				"name" => "Маленькое изображение (превью)",
				"folder" => "small",
				"param" => "a:2:{i:0;a:4:{s:4:\"name\";s:6:\"resize\";s:5:\"width\";s:3:\"180\";s:6:\"height\";s:3:\"180\";s:3:\"max\";i:1;}i:1;a:7:{s:4:\"name\";s:4:\"crop\";s:5:\"width\";s:3:\"180\";s:6:\"height\";s:3:\"180\";s:8:\"vertical\";s:6:\"middle\";s:11:\"vertical_px\";s:0:\"\";s:10:\"horizontal\";s:6:\"center\";s:13:\"horizontal_px\";s:0:\"\";}}",
				"quality" => 90,
			),
			array(
				"id" => 2,
				"name" => "Среднее изображение",
				"folder" => "medium",
				"param" => "a:1:{i:0;a:4:{s:4:\"name\";s:6:\"resize\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:3:\"max\";i:0;}}",
				"quality" => 90,
			),
			array(
				"id" => 3,
				"name" => "Большое изображение (полная версия)",
				"folder" => "large",
				"param" => "a:1:{i:0;a:4:{s:4:\"name\";s:6:\"resize\";s:5:\"width\";i:1200;s:6:\"height\";i:1200;s:3:\"max\";i:0;}}",
				"quality" => 90,
			),
			array(
				"id" => 4,
				"name" => "Превью товара",
				"folder" => "preview",
				"param" => "a:2:{i:0;a:4:{s:4:\"name\";s:6:\"resize\";s:5:\"width\";s:2:\"80\";s:6:\"height\";s:2:\"80\";s:3:\"max\";i:1;}i:1;a:7:{s:4:\"name\";s:4:\"crop\";s:5:\"width\";s:2:\"80\";s:6:\"height\";s:2:\"80\";s:8:\"vertical\";s:6:\"middle\";s:11:\"vertical_px\";s:0:\"\";s:10:\"horizontal\";s:6:\"center\";s:13:\"horizontal_px\";s:0:\"\";}}",
				"quality" => 90,
			),
			array(
				"id" => 5,
				"name" => "Фотогалерея",
				"folder" => "photo_medium",
				"param" => "a:2:{i:0;a:4:{s:4:\"name\";s:6:\"resize\";s:5:\"width\";s:3:\"230\";s:6:\"height\";s:3:\"230\";s:3:\"max\";i:1;}i:1;a:7:{s:4:\"name\";s:4:\"crop\";s:5:\"width\";s:3:\"230\";s:6:\"height\";s:3:\"230\";s:8:\"vertical\";s:6:\"middle\";s:11:\"vertical_px\";s:0:\"\";s:10:\"horizontal\";s:6:\"center\";s:13:\"horizontal_px\";s:0:\"\";}}",
				"quality" => 80,
			),
			array(
				"id" => 6,
				"name" => "Товар",
				"folder" => "shop_medium",
				"param" => "a:1:{i:0;a:4:{s:4:\"name\";s:6:\"resize\";s:5:\"width\";s:3:\"380\";s:6:\"height\";s:3:\"380\";s:3:\"max\";i:1;}}",
				"quality" => 80,
			),
		),
	);
}