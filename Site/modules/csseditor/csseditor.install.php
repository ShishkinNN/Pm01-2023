<?php

/**
 * Установка модуля
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2014 OOO «Диафан» (http://diafan.ru)
 */
if (!defined('DIAFAN'))
{
    include(dirname(dirname(dirname(__FILE__))).'/includes/404.php');
}

class Csseditor_install extends Install
{

    /**
     * @var string название
     */
    public $title = "Редактор CSS";

    /**
     * @var array записи в таблице {modules}
     */
    public $modules = array(
	array(
	    "name"	 => "csseditor",
	    "admin"	 => true,
	    "site"	 => false
	),
    );

    /**
     * @var array меню административной части
     */
    public $admin = array(
	array(
	    "name"		 => "Редактор CSS",
	    "rewrite"	 => "csseditor",
	    "group_id"	 => "3",
	    "sort"		 => 25,
	    "act"		 => true,
	),
    );
    
}
