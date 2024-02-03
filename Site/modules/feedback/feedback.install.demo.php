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

class Feedback_install_demo extends Install
{
	/**
	 * @var array демо-данные
	 */
	public $demo = array(
		"site" => array(
			array(
				"id" => 7,
				"name" => array("Обратная связь"),
				"rewrite" => "feedback",
				"sort" => 9,
				"module_name" => "feedback",
			),
		),
		"config" => array(
			array(
				"name" => "add_message",
				"value" => "<div align=\"center\"><b>Спасибо за ваше сообщение!</b></div>",
			),
			array(
				"name" => "subject",
				"value" => "%title (%url). Обратная связь",
			),
			array(
				"name" => "message",
				"value" => "Здравствуйте!<br>Вы оставили сообщение в форме обратной связи на сайте %title (%url).<br><b>Сообщение:</b> %message <br><b>Ответ:</b> %answer",
			),
			array(
				"name" => "sendsmsadmin",
				"value" => "0",
			),
		),
		"feedback_param" => array(
			array(
				"id" => 1,
				"name" => array("Ваше имя"),
				"type" => "text",
				"sort" => 2,
			),
			array(
				"id" => 3,
				"name" => array("Ваше сообщение"),
				"type" => "textarea",
				"sort" => 8,
			),
			array(
				"id" => 6,
				"name" => array("Ваш телефон"),
				"type" => "text",
				"sort" => 7,
			),
		),
	);
}