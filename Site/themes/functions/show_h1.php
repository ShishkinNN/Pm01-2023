<?php
/**
 * Шаблонный тег: выводит заголовок страницы, если не запрещен его вывод в настройке странице «Не показывать заголовок».
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2015 OOO «Диафан» (http://www.diafan.ru/)
 */

if (! defined('DIAFAN'))
{
	include dirname(dirname(dirname(__FILE__))).'/includes/404.php';
}

if (! $this->diafan->_site->title_no_show)
{
	if ($this->diafan->_site->titlemodule)
	{
		$name = $this->diafan->_site->titlemodule;
		if ($this->diafan->_site->edit_meta)
		{
			$name = $this->diafan->_useradmin->get($name, 'name', $this->diafan->_site->edit_meta["id"], $this->diafan->_site->edit_meta["table"], _LANG);
		}
	}
	else
	{
		$name = $this->diafan->_useradmin->get($this->diafan->_site->name, 'name', $this->diafan->_site->id, 'site', _LANG);
	}
	if($name) echo '<h1 class="heading heading_inside">'.$name.'</h1>';
}