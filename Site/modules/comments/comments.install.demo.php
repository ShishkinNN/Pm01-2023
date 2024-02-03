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

class Comments_install_demo extends Install
{
	/**
	 * @var array демо-данные
	 */
	public $demo = array(
		"config" => array(
			array(
				"name" => "error_insert_message",
				"value" => "Ваше сообщение уже имеется в базе.",
			),
			array(
				"name" => "add_message",
				"value" => "Спасибо! Ваш комментарий будет проверен в ближайшее время и появится на сайте.",
			),
			array(
				"name" => "subject",
				"value" => "Новый комментарий на сайте %title (%url)",
			),
			array(
				"name" => "message",
				"value" => "Здравствуйте! Вы подписались на комментарии на сайте %title (%url).<br>На странице появился <a href=\"%link\">новый комментарий</a>:<br>%message<br><br>Отписаться можете по <a href=\"%actlink\">ссылке</a>.",
			),
			array(
				"name" => "sendsmsadmin",
				"value" => "0",
			),
			array(
				"name" => "captcha",
				"value" => "",
			),
		),
		"comments_param" => array(
			array(
				"id" => 1,
				"name" => array("Имя"),
				"type" => "text",
				"sort" => 1,
				"required" => "1",
				"show_in_list" => "1",
				"show_in_form_no_auth" => "1",
			),
		),
	);
}