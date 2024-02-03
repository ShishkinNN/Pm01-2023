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

class Payment_install_demo extends Install
{
	/**
	 * @var array демо-данные
	 */
	public $demo = array(
		"payment" => array(
			array(
				"id" => 1,
				"name" => array("Наличными курьеру"),
				"text" => array("Заказ необходимо оплатить курьеру на руки наличными"),
				"sort" => 1,
			),
			array(
				"id" => 2,
				"name" => array("Оплата счета балансом"),
				"text" => array("Вы можете оплатить счет используя баланс"),
				"payment" => "balance",
				"sort" => 2,
			),
		),
	);
}