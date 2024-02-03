<?php
/**
 * Шаблон списка товаров для поиска
 * 
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2015 OOO «Диафан» (http://www.diafan.ru/)
 */
if (!defined('DIAFAN'))
{
    include dirname(dirname(dirname(__FILE__))).'/includes/404.php';
}

if(! empty($result["error"]))
{
	echo '<p>'.$result["error"].'</p>';
	return;
}

if(empty($result["ajax"]))
{
	echo '<div class="js_shop_list shop_list">';
}

//вывод списка товаров
if (!empty($result["rows"]))
{
	echo $this->get('rows','shop',$result);
}

if(empty($result["ajax"]))
{
	echo '</div>';
}