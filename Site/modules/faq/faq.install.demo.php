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

class Faq_install_demo extends Install
{
	/**
	 * @var array демо-данные
	 */
	public $demo = array(
		"site" => array(
			array(
				"id" => 12,
				"name" => array("Отзывы "),
				"rewrite" => "faq",
				"sort" => 5,
				"menu" => "1",
				"module_name" => "faq",
			),
		),
		"config" => array(
			array(
				"name" => "sendsmsadmin",
				"value" => "0",
			),
			array(
				"name" => "add_message",
				"value" => "<div align=\"center\"><b>Спасибо за ваше сообщение!</b><br>Наш консультант подберет необходимую информацию, после чего ваш вопрос и ответ на него будут опубликованы на этой странице.</div>",
			),
			array(
				"name" => "error_insert_message",
				"value" => "Ваше сообщение уже имеется в базе.",
			),
			array(
				"name" => "attachments_access_admin",
				"value" => "1",
			),
			array(
				"name" => "subject",
				"value" => "%title (%url). Вопрос-Ответ",
			),
			array(
				"name" => "message",
				"value" => "Здравствуйте, %name!<br>Вы задали вопрос на сайте %title (%url).<br><b>Вопрос:</b> %question <br><b>Ответ:</b> %answer",
			),
			array(
				"name" => "comments",
				"value" => "1",
			),
			array(
				"name" => "keywords",
				"value" => "1",
			),
			array(
				"name" => "security",
				"value" => "",
			),
		),
		"faq" => array(
			array(
				"id" => 1,
				"name" => array("Олеся"),
				"anons" => array("Отзывы, вопросы и ответы будут написаны на этой странице. Любой объем текста можно написать, но желательно уложиться в несколько абзацев, ведь пользователи интернета ценят краткость и предметность."),
				"rewrite" => "faq/vyzvala-mastera-na-dom-dlya-diagnosti-noutbuka-pri",
			),
			array(
				"id" => 2,
				"anons" => array("Отзывы, вопросы и ответы будут написаны на этой странице. Любой объем текста можно написать, но желательно уложиться в несколько абзацев, ведь пользователи интернета ценят краткость и предметность.
Отзывы, вопросы и ответы будут написаны на этой странице. Любой объем текста можно написать, но желательно уложиться в несколько абзацев, ведь пользователи интернета ценят краткость и предметность.
Отзывы, вопросы и ответы будут написаны на этой странице. Любой объем текста можно написать, но желательно уложиться в несколько абзацев, ведь пользователи интернета ценят краткость и предметность."),
				"rewrite" => "faq/otzyvy-voprosy-i-otvety-budut-napisany-na-etoy-str",
			),
			array(
				"id" => 3,
				"anons" => array("Отзывы, вопросы и ответы будут написаны на этой странице. Любой объем текста можно написать, но желательно уложиться в несколько абзацев, ведь пользователи интернета ценят краткость и предметность."),
				"rewrite" => "faq/otzyvy-voprosy-i-otvety-budut-napisany-na-etoy-str3",
			),
		),
	);
}